<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to(site_url('tasks'));
        }

        return view('auth/login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if (! $user || ! password_verify($password, $user['password'] ?? '')) {
            session()->setFlashdata(
                'error',
                'Invalid username or password.'
            );

            return redirect()->to(site_url('login'))->withInput();
        }

        session()->regenerate();

        session()->set([
            'isLoggedIn' => true,
            'user_id' => $user['id'],
            'username' => $user['username']
        ]);

        return redirect()->to(site_url('tasks'));
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('login'));
    }
}
