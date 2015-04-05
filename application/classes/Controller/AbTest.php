<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 04.04.15
 * Time: 21:50
 */

class Controller_AbTest extends Controller
{
    use Component_AuthRequired;
    use Component_DefaultLayout;

    /**
     *
     * @throws HTTP_Exception_400|HTTP_Exception_403|HTTP_Exception_404
     */
    public function action_view()
    {
        $id = $this->request->param('id', FALSE);
        $usr = Auth::instance()->get_user();
        if (!$id)
        {
            throw new HTTP_Exception_400('The id param is required for this action');
        }
        $ab_test = ORM::factory('AbTest', intval($id));
        if ($ab_test instanceof Model_AbTest && (!empty($ab_test->id)))
        {
            if ($ab_test->user_id !== $usr->id)
            {
                throw new HTTP_Exception_403('Don`t do this stuff! Bib Brother is watching you!');
            }

            $this->response->body(View::factory('ab_test/view', [
                'ab_test' => $ab_test,
                'analytics' => $this->_get_analytics($ab_test),
            ]));
        }
        else
        {
            throw new HTTP_Exception_404('This Ab test is not exist');
        }
    }

    /**
     * Returns analytics data for certain test
     * @param Model_AbTest $ab_test
     * @return array
     */
    protected function _get_analytics(Model_AbTest &$ab_test = NULL)
    {
        // Gets shows group by variants
        $analytics = DB::query(Database::SELECT, '
            SELECT count(ta.id) cnt, v.sys_name variant, at.sys_name action_type, at.id action_type_id
            FROM test_actions ta
              INNER JOIN enums v ON ta.variant = v.id
              INNER JOIN enums at ON ta.action_type = at.id
            WHERE ta.test_id = ' . $ab_test->id . '
            GROUP BY v.id, at.id;
        ')->execute();

        $result = [];
        foreach ($analytics as $row)
            $result[$row['action_type']][$row['variant']] = $row['cnt'];

        return $result;
    }


    /**
     * Creation of AB test
     */
    public function action_new()
    {
        $errors = [];
        if ($this->request->method() === 'POST')
        {
            $post = $this->request->post();
            $form_validator = $this->_get_create_from_validator($post);
            if ($form_validator->check())
            {
                $ab_test = ORM::factory('AbTest');
                $dm = $post['domain'];

                $ab_test->name = $post['name'];
                $ab_test->bootstrap_url = $dm.$post['bootstrap_url'];
                $ab_test->a_url = $dm.$post['a_url'];
                $ab_test->b_url = $dm.$post['b_url'];
                $ab_test->success_url = $dm.$post['success_url'];
                $ab_test->user_id = Auth::instance()->get_user()->id;

                $ab_test->save();
                $this->redirect('/ab-test/view/'.$ab_test->id);
            }
            else
            {
                $errors = $form_validator->errors('');
            }
        }

        $this->response->body(View::factory('ab_test/new', [
            'errors' => $errors,
        ]));
    }

    /**
     * Return the new ab-test from's validator
     * the application layer validation
     *
     * @param $post
     * @return Validation
     */
    protected function _get_create_from_validator($post)
    {
        $uriRegexp = '/^\/[-?:&=.,%\w\d\/]*$/';
        return Validation::factory($post)
            ->rules('name', [
                ['not_empty']
            ])
            ->rules('domain', [
                ['not_empty'],
                ['regex', [':value', '/^(([a-zA-Z]{1})|([a-zA-Z]{1}[a-zA-Z]{1})|([a-zA-Z]{1}[0-9]{1})|([0-9]{1}[a-zA-Z]{1})|([a-zA-Z0-9][a-zA-Z0-9-_]{1,61}[a-zA-Z0-9]))\.([a-zA-Z]{2,6}|[a-zA-Z0-9-]{2,30}\.[a-zA-Z]{2,3})$/']],
            ])
            ->rules('bootstrap_url', [
                ['not_empty'],
                ['regex', [':value', $uriRegexp]]
            ])
            ->rules('a_url', [
                ['not_empty'],
                ['regex', [':value', $uriRegexp]]
            ])
            ->rules('b_url', [
                ['not_empty'],
                ['regex', [':value', $uriRegexp]]
            ])
            ->rules('success_url', [
                ['not_empty'],
                ['regex', [':value', $uriRegexp]]
            ]);
    }
} 