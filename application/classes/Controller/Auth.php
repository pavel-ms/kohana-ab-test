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
        $model = ORM::factory('User');
		$this->response->body(View::factory('auth/login'));
	}

} // Controller_Auth