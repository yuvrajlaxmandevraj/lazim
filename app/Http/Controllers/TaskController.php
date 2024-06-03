<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index(){
        $tasks = Task::orderBy('id','desc')->paginate(10); 
        return view('list', compact('tasks'));
    }

    public function create(){
        return view('create_task');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|numeric',
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect(route('home'))->with('success', 'Task created successfully!');
    }
}
