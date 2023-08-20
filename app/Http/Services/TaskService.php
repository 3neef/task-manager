<?php

namespace App\Http\Services;

use App\Models\Settings\VechileColor;
use App\Models\Task;

class TaskService
{


    public  static function store($request)
    {
        $task = Task::create($request->validated());
        return $task;
    }
    public function update($request, $task)
    {
        $task->update($request->validated());
        return $task;
    }


    public  static function destroy($task)
    {
        $task->delete();
        return $task;
    }
}
