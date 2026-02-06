<?php

namespace App\Controllers;

class HomeController
{
    public function __construct() {}

    public function index()
    {
        echo 'Bonjour from Home index';
    }

    public function getById()
    {
        echo 'Bonjour from Home view avec l\'id ' . $_GET['id'];
    }
}
