<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller
{
	// set controller as 'must-authorized'
	use Component_AuthRequired;
	// set default layout for render
	use Component_DefaultLayout;

	/**
	 * Main page
	 */
	public function action_index()
	{
        $usr = Auth::instance()->get_user();

        $user_tests = ORM::factory('AbTest')
            ->where('user_id', '=', $usr->id)
            ->find_all();
        //print_r($user_tests);exit;

        $this->response->body(View::factory('index/index', [
            'user_tests' => $user_tests,
        ]));
	}

} // End Index