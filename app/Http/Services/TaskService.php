<?php

namespace App\Http\Services;

use App\Models\Settings\VechileColor;
use App\Models\Task;

class TaskService
{


    public  static function store($request)
    {
        // dd($request->all());
        $task = Task::create($request->validated());
        return $task;
    }
    public  static function update($request)
    {
        $task = Task::update($request->validated());
        return $task;
    }


    // public  static function show($request)
    // {
    //     $brand = VechileColor::all();
    //     return $brand;
    // }
}
