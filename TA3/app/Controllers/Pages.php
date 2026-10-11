<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'heading' => 'TECHNICAL 3: MAKING IT EDITABLE',
            'description' => 'Forms, Validation, and File Upload'
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'heading' => 'About This POS System',
            'description' => 'This application demonstrates basic routing, controllers, views, and static data handling using CodeIgniter 4 === MODULE 1 test heh.'
        ];

        return view('about', $data);
    }
}
