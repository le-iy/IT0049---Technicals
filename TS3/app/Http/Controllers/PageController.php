<?php

namespace App\Http\Controllers;

use App\Models\Task;

class PageController extends Controller
{
    public function index()
    {
        $tasks = Task::where('task_date', today()->toDateString())->get();

        return view('welcome', [
            'title' => 'Tasks for Today',
            'tasks' => $tasks
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }
}
