<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'full_name' => 'Lei Caabay',
                'email' => 'leicaabay@gmail.com',
                'phone' => '09123456781'
            ],
            [
                'id' => 2,
                'full_name' => 'Allyssa Kirsten Yasona',
                'email' => 'allyssayasona@gmail.com',
                'phone' => '09123456782'
            ],
            [
                'id' => 3,
                'full_name' => 'John Benedict Sazon',
                'email' => 'jbsazon@gmail.com',
                'phone' => '09123456783'
            ],
            [
                'id' => 4,
                'full_name' => 'Charles Miguel Martin',
                'email' => 'migsmartin@gmail.com',
                'phone' => '09123456784'
            ],
            [
                'id' => 5,
                'full_name' => 'Allison Grace See',
                'email' => 'allisonsee@gmail.com',
                'phone' => '09123456785'
            ]
        ];

        return view('customers', [
            'title' => 'Customer Accounts',
            'customers' => $customers
        ]);
    }
}
