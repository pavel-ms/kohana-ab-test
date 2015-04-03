<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller extends Kohana_Controller
{
	/**
	 * This stuff is using by layouts files
	 * change it into controller for extending
	 * @var array
	 */
	public $template_settings = [
		'title' => 'AB Test Application',
	];

	/**
	 * @inheritdoc
	 */
	public function before()
	{
		parent::before();

		// Checks whether controller is 'must-authorized'
		if (method_exists($this, 'auth_required'))
		{
			try {
				$this->auth_required();
			} catch (\Exception $e) {
				if ($e instanceof Exception_AuthREquired) {
					$this->redirect('auth/login');
				} else {
					throw $e;
				}
			}
		}  // End if
	}


	/**
	 * @inheritdoc
	 */
	public function after()
	{
		parent::before();

		if (method_exists($this, 'apply_layout'))
		{
			$this->apply_layout();
		}
	}

} // Controller_Base