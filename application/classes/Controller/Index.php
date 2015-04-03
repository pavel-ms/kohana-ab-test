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
		$this->response->body(View::factory('index/index'));
	}

} // End Index