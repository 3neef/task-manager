<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Services\TaskService;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected TaskService $taskService;
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }


    public function index()
    {
        $tasks = Task::paginate(10);
        return view('dashboard', compact('tasks'));
    }


    public function create()
    {
        return view("tasks.create");
    }

    public function store(TaskRequest $request)
    {
        $task = $this->taskService->store($request);

        if ($task) {
            return redirect()->route('dashboard')->with('message', 'task created successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function edit(Task $task)
    {
        return view("tasks.edit", compact('task'));
    }

    public function destroy(Task $task)
    {
        $task = $this->taskService->destroy($task);

        if ($task) {
            return redirect()->route('dashboard')->with('message', 'task deleted successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function show(Task $task)
    {
        return view("tasks.show", compact('task'));
    }

    public function update(TaskRequest $request,Task $task)
    {
        $task = $this->taskService->update($request, $task);

        if ($task) {
            return redirect()->route('dashboard')->with('message', 'task updated successfully');
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
