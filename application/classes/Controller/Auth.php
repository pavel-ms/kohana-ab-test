<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller
{
	// set default layout for render
	use Component_DefaultLayout;

	/**
	 * login page
	 */
	public function action_login()
	{
        if (Auth::instance()->logged_in())
        {
            $this->redirect('/');
            return;
        }
        $errors = [];

        if ($this->request->method() === 'POST')
        {
            $post = $this->request->post();
            $valid = new Validation(array_merge($post, $_FILES));
            $valid
                // validate email field
                ->rules('email', [
                    ['not_empty'],
                    ['max_length', array(':value', 254)],
                    ['email'],
                ])
                // validate password
                ->rules('password', [
                    ['not_empty'],
                ]);
            if ($valid->check())
            {
                $model = ORM::factory('User', [
                    'email' => $post['email'],
                    'password' => Auth::instance()->hash($post['password']),
                ]);
                if ($model)
                {
                    Auth::instance()->login($model, $post['password'], TRUE);
                    $this->redirect('/');
                }
                else
                {
                    $errors['general'] = 'This login and password is not exist';
                }
            }
            else
            {
                $errors = $valid->errors(''); // just use default error messages
            }
        }

        $this->response->body(View::factory('auth/login', [
            'errors' => $errors,
        ]));
	}

    /**
     * Logout action
     */
    public function action_logout()
    {
        if (Auth::instance()->logged_in())
        {
            Auth::instance()->logout(TRUE);
        }

        $this->redirect('/auth/login');
    }


    /**
     * Just helper to create a user
     */
    public function action_create()
    {
        $model = ORM::factory('User');
        $model->values([
            'username' => 'user',
            'email' => 'user@test.ru',
            'password' => 'test',
            'password_confirm' => 'test',
        ]);
        $model->save();
        $model->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
        echo '11111';exit;
    }

} // Controller_Auth