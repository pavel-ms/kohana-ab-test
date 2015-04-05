<?php

class Controller_Analytics extends Controller
{
    use Component_JSONPController;

    /**
     * Return settings for watch app
     * @throws HTTP_Exception_400
     */
    public function action_settings()
    {
        $id = $this->request->query('id');
        if (is_null($id))
            throw new HTTP_Exception_400('The id param must be specified');

        $ab_test = ORM::factory('AbTest', intval($id));
        if (is_null($ab_test->id))
            throw new HTTP_Exception_404('This Ab test is not exist');

        $this->_send_response($ab_test->as_array());
    }

    /**
     * Collect data about user actions
     *
     * @throws HTTP_Exception_400|HTTP_Exception_404
     */
    public function action_grab_data()
    {
        // 1. gets and validates params
        $req = & $this->request;
        $params = [$req->query('id'), $req->query('action'), $req->query('variant')];
        array_map(function($el) {
            if (is_null($el))
                throw new HTTP_Exception_400('Not all params is specified');
        }, $params);
        list($id, $action, $variant) = $params;

        // 2. finds all necessary enums
        try {
            $action_type = Model_Enum::get_path('action_types.'.$action);
            $test_variant = Model_Enum::get_path('test_variants.'.$variant);
        } catch (\Exception $e) {
            throw new HTTP_Exception_400('Not valid params were sent');
        }

        // 3. restores AbTest object and checks whether it is exist or not
        $ab_test = ORM::factory('AbTest', $id);
        if (empty($ab_test->id))
            throw new HTTP_Exception_404('Test is not found');

        // 4. creates analytics action and saves it
        ORM::factory('TestAction')
            ->values([
                'action_type' => $action_type->id,
                'variant'     => $test_variant->id,
                'test_id'     => $ab_test->id,
            ])
            ->save();

        // 5. Just send some dummy stuff about success
        $this->_send_response(['result' => 'OK']);
    }
} 