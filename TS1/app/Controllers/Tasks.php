<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function today()
    {
        $model = new TaskModel();

        $data = [
            'title' => "Today's Tasks",
            'tasks' => $model->getTodayTasks()
        ];

        return view('tasks/today', $data);
    }

    public function index()
    {
        $model = new TaskModel();

        $data = [
            'title' => 'All Tasks',
            'tasks' => $model->getAllTasks()
        ];

        return view('tasks/index', $data);
    }
}
