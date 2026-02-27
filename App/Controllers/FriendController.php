<?php

namespace App\Controllers;

use App\Models\Friend;

class FriendController extends AppController
{
    public function index()
    {
        $this->view['friends'] = Friend::getAll();
    }

    public function add()
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                return;

            case 'POST':
                Friend::add($_POST);
                header("Location: ./index", true, 302);
                exit;
        }
    }
}
