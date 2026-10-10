<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Customer Accounts',
            'customers' => [
                [
                    'full_name' => 'Lei Caabay',
                    'email' => 'leicaabay@gmail.com',
                    'phone' => '09123456781'
                ],
                [
                    'full_name' => 'Allyssa Kirsten Yasona',
                    'email' => 'allyssayasona@gmail.com',
                    'phone' => '09123456782'
                ],
                [
                    'full_name' => 'John Benedict Sazon',
                    'email' => 'jbsazon@gmail.com',
                    'phone' => '09123456783'
                ],
                [
                    'full_name' => 'Charles Miguel Martin',
                    'email' => 'migsmartin@gmail.com',
                    'phone' => '09123456784'
                ],
                [
                    'full_name' => 'Allison Grace See',
                    'email' => 'allisonsee@gmail.com',
                    'phone' => '09123456785'
                ]
            ]
        ];

        return view('customers', $data);
    }
}
