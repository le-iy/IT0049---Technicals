<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data = [
            'title' => 'User Accounts',
            'users' => $model->findAll()
        ];

        return view('users', $data);
    }
}
