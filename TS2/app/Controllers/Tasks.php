<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Tasks extends BaseController
{
    public function today()
    {
        $model = new TaskModel();

        return view('tasks/today', [
            'title' => "Today's Tasks",
            'tasks' => $model->getTodayTasks()
        ]);
    }

    public function index()
    {
        $model = new TaskModel();

        return view('tasks/index', [
            'title' => 'All Tasks',
            'tasks' => $model->getAllTasks()
        ]);
    }

    public function new()
    {
        return view('tasks/new', [
            'title' => 'New Task'
        ]);
    }

    public function create()
    {
        $rules = [
            'title' => 'required|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]',
            'status' => 'required|in_list[pending,done]'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new TaskModel();

        $model->insert([
            'title' => $this->request->getPost('title'),
            'task_date' => $this->request->getPost('task_date'),
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
            'is_archived' => 0
        ]);

        return redirect()->to(site_url('tasks'));
    }

    public function edit($id)
    {
        $model = new TaskModel();

        $task = $model->where('is_archived', 0)->find($id);

        if (! $task) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('tasks/edit', [
            'title' => 'Edit Task',
            'task' => $task
        ]);
    }

    public function update($id)
    {
        $model = new TaskModel();

        $task = $model->where('is_archived', 0)->find($id);

        if (! $task) {
            throw PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'title' => 'required|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]',
            'status' => 'required|in_list[pending,done]'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'task_date' => $this->request->getPost('task_date'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to(site_url('tasks'));
    }

    public function archive($id)
    {
        $model = new TaskModel();

        $task = $model->where('is_archived', 0)->find($id);

        if (! $task) {
            throw PageNotFoundException::forPageNotFound();
        }

        $model->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to(site_url('tasks'));
    }
}
