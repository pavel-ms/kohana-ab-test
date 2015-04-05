<?php

trait Component_JSONPController
{
    /**
     * Send data to jsonp requests
     *
     * @throws HTTP_Exception_400|Kohana_Exception
     * @param array $data
     * @return string
     */
    protected function _send_response($data = [])
    {
        if (!$this instanceof Controller)
            throw new Kohana_Exception('The `Component_DefaultLayout` trait must be used by Controller class');

        $cb = $this->request->query('cb');
        if (is_null($cb))
            throw new HTTP_Exception_400('The cb param must be set');

        header('Content-Type: application/javascript; charset=utf-8');
        echo $cb . '(' . json_encode($data) . ');';
        exit;
    }
} 