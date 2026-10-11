<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        return view('users', [
            'title' => 'User Accounts',
            'users' => $model->findAll()
        ]);
    }

    public function new()
    {
        return view('users/new', [
            'title' => 'New User'
        ]);
    }

    public function create()
    {
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new UserModel();

        $model->insert([
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(site_url('users'));
    }

    public function edit($id)
    {
        $model = new UserModel();
        $user = $model->find($id);

        if (! $user) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('users/edit', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $model = new UserModel();
        $user = $model->find($id);

        if (! $user) {
            throw PageNotFoundException::forPageNotFound();
        }

        // Validate user information first.
        $rules = [
            'username' => "required|is_unique[users.username,id,{$id}]",
            'full_name' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        // Retrieve the optional uploaded avatar.
        $file = $this->request->getFile('avatar');

        if ($file && $file->getError() !== UPLOAD_ERR_NO_FILE) {

            $uploadRules = [
                'avatar' => [
                    'rules' => [
                        'uploaded[avatar]',
                        'max_size[avatar,2048]',
                        'mime_in[avatar,image/jpeg,image/png]'
                    ]
                ]
            ];

            if (! $this->validateData([], $uploadRules)) {
                return redirect()->back()->withInput();
            }

            // Generate a safe, random filename.
            $newName = $file->getRandomName();

            // Store the image inside public/uploads.
            $uploadPath = FCPATH . 'uploads';

            if (! is_dir($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }

            $file->move($uploadPath, $newName);

            // Prepare a 300x300 image for display.
            $image = service('image');

            $image->withFile($uploadPath . '/' . $newName)
                  ->fit(300, 300, 'center')
                  ->save($uploadPath . '/' . $newName);

            // Save only the filename in the database.
            $data['avatar'] = $newName;
        }

        $model->update($id, $data);

        return redirect()->to(site_url('users'));
    }
}
