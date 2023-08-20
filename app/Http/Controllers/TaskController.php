<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected TaskService $taskService;
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }


    public function index (){

    }


    public function create(){
        return view("tasks.create");
    }

    public function store(TaskRequest $request){
        $task = $this->taskService->store($request);

        if($task){
            return redirect()->route('dashboard')->with('success', 'task created successfully');
        }else{
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function update(TaskRequest $request){
        $task = $this->taskService->update($request);

        if($task){
            return redirect()->route('dashboard')->with('success', 'task updated successfully');
        }else{
            return redirect()->back()->with('error', 'something went wrong');
        }
    }


}
