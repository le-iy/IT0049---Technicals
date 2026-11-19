<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::first();

        return view('profile', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }
}
