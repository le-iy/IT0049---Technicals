<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin01',
                'full_name' => 'AkoSiAdmin',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'username' => 'cashier01',
                'full_name' => 'CashierPerson1',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'username' => 'cashier02',
                'full_name' => 'CashierPerson2',
                'role' => 'Cashier'
            ],
            [
                'id' => 4,
                'username' => 'staff01',
                'full_name' => 'StaffPerson1',
                'role' => 'Staff'
            ],
            [
                'id' => 5,
                'username' => 'manager01',
                'full_name' => 'ManagerPerson1',
                'role' => 'Manager'
            ]
        ];

        return view('users', [
            'title' => 'User Accounts',
            'users' => $users
        ]);
    }
}
