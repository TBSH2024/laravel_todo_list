<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'task_name' => 'Task 1',
                'due_date' => '2024-07-13 00:00:00',
                'is_deleted' => 0,
                'created_at' => Now(),
                'updated_at' => Now(),
            ],
            [
                'task_name' => 'Task 2',
                'due_date' => '2024-07-14 00:00:00',
                'is_deleted' => 0,
                'created_at' => Now(),
                'updated_at' => Now(),
            ],
            [
                'task_name' => 'Task 3',
                'due_date' => '2024-07-15 00:00:00',
                'is_deleted' => 0,
                'created_at' => Now(),
                'updated_at' => Now(),
            ],
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert($task);
        }
    }
}
