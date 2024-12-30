<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::getActiveTasks();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'due_date' => 'required|date',
        ]);
        Task::create([
            'task_name' => $request->task_name,
            'due_date' => $request->due_date,
        ]);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function moveToTrash(int $id)
    {
        Task::markAsDeleted($id);
        return redirect()->route('index');
    }

    public function trash()
    {
        $tasks = Task::getTrashTasks();

        return view('tasks.trash', compact('tasks'));
    }

    public function recover(int $id)
    {
        Task::recoverTask($id);
        return redirect()->route('index');
    }

    public function clearTrash()
    {
        Task::permanentlyDeleteAll();
        return redirect()->route('index');
    }
}
