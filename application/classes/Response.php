<?php defined('SYSPATH') OR die('No direct script access.');

class Response extends Kohana_Response
{
	/**
	 * Return current body
	 * @return string
	 */
	public function getBody()
	{
		return $this->_body;
	}
}