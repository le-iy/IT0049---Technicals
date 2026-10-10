<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',
            'users' => [
                [
                    'username' => 'admin01',
                    'full_name' => 'AkoSiAdmin',
                    'role' => 'Administrator'
                ],
                [
                    'username' => 'cashier01',
                    'full_name' => 'CashierPerson1',
                    'role' => 'Cashier'
                ],
                [
                    'username' => 'cashier02',
                    'full_name' => 'CashierPerson2',
                    'role' => 'Cashier'
                ],
                [
                    'username' => 'staff01',
                    'full_name' => 'StaffPerson1',
                    'role' => 'Staff'
                ],
                [
                    'username' => 'manager01',
                    'full_name' => 'ManagerPerson1',
                    'role' => 'Manager'
                ]
            ]
        ];

        return view('users', $data);
    }
}
