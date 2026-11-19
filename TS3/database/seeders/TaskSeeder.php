<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Complete remaining IT0049 Technicals',
            'status' => 'pending',
            'task_date' => '2026-11-21',
        ]);

        Task::create([
            'title' => 'Review for GED0083L Final Exam',
            'status' => 'pending',
            'task_date' => '2026-11-25',
        ]);

        Task::create([
            'title' => 'Review for IT0019 Summative',
            'status' => 'done',
            'task_date' => '2026-11-20',
        ]);

        Task::create([
            'title' => 'Finish IT0015 TakeHome Summatives',
            'status' => 'pending',
            'task_date' => '2026-11-21',
        ]);

        Task::create([
            'title' => 'Finish IT0035L Canvas Requirements',
            'status' => 'done',
            'task_date' => '2026-11-20',
        ]);

        Task::create([
            'title' => 'Finish IT0035L Netacad Requirements',
            'status' => 'pending',
            'task_date' => '2026-11-20',
        ]);

        Task::create([
            'title' => 'Finish IT0204 Deliverables',
            'status' => 'pending',
            'task_date' => '2026-11-21',
        ]);

        Task::create([
            'title' => 'Sleep',
            'status' => 'pending',
            'task_date' => '2026-11-20',
        ]);
    }
}
