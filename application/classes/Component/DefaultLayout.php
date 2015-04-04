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

        $usr = Auth::instance()->logged_in()
            ? Auth::instance()->get_user()
            : null;

		$content = $this->response->getBody();
		$layout = View::factory('layouts/default', [
			'content' => $content,
			'template_settings' => $this->template_settings,
            'user' => $usr,
		]);

		$this->response->body($layout);
	}

}