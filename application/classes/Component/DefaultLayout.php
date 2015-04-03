<?php

trait Component_DefaultLayout
{

	/**
	 * Put content into layout
	 * @throws Kohana_Exception
	 * @todo: move to base trait
	 */
	public function apply_layout()
	{
		if (!$this instanceof Controller)
			throw new Kohana_Exception('The `Component_DefaultLayout` trait must be used by Controller class');

		// it's controversial decision, keep it in mind!!
//		if ($this->requst->method() !== 'GET')
//			return;

		$content = $this->response->getBody();
		$layout = View::factory('layouts/default', [
			'content' => $content,
			'template_settings' => $this->template_settings,
		]);

		$this->response->body($layout);
	}

}