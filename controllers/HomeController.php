<?php

class HomeController
{
    function __construct()
    {
        $data['body'] = 'Hello world';
        return View::make('index', $data);
    }
}