<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task_name',
        'due_date',
        'is_deleted',
    ];

    public static function getActiveTasks()
    {
        return self::where('is_deleted', false)->get();
    }

    public static function markAsDeleted($id)
    {
        $task = self::find($id);
        $task->is_deleted = true;
        $task->save();
        return $task;
    }

    public static function getTrashTasks()
    {
        return self::where('is_deleted', true)->get();
    }

    public static function recoverTask(int $id)
    {
        $task = self::find($id);
        $task->is_deleted = false;
        $task->save();
        return $task;
    }

    public static function permanentlyDeleteAll()
    {
        return self::where('is_deleted', true)->delete();
    }
}