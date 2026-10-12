<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data = [
            'title' => 'User Profile',
            'user' => $model->first()
        ];

        return view('profile/index', $data);
    }
}
