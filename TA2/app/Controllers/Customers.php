<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();

        $data = [
            'title' => 'Customer Accounts',
            'customers' => $model->findAll()
        ];

        return view('customers', $data);
    }
}
