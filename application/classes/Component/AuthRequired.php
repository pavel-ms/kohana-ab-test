<?php

/**
 * Class Controller_AuthRequired
 *
 * Just makes all the action 'must-authorized'
 */
trait Component_AuthRequired
{

	/**
	 * @var string
	 */
	public $default_role = 'user';

	/**
	 * Checks auth
	 * @throws Exception_AuthRequired
	 */
	protected function auth_required()
	{
		$role = isset($this->user_role)
			? $this->user_role
			: $this->default_role;

		if (!Auth::instance()->logged_in($role)) {
			throw new Exception_AuthRequired;
		}
	}
}