<?php

namespace App\Controllers;

class AppController
{
    protected $routeParams;
    protected $view;

    public function __construct($urlParts)
    {
        $this->routeParams = $urlParts;
        $this->view = [];
    }

    public function before() {}

    public function after()
    {
        extract($this->view);

        $page = dirname(__DIR__) . '/Views/' . ucfirst($this->routeParams[0]) . '/' . lcfirst($this->routeParams[1]) . '.html';
        require_once(dirname(__DIR__) . '/Views/Layout/base.html');
    }
}
