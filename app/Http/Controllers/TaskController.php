<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class TaskController extends Controller
{
    public function index(Request $request)
    {

        $tasks = $request->user()->tasks()->get();
        return view('task.index',compact('tasks'));
    }

    public function create(Request $request){
        return view('task.create');

    }

    public function store(Request $request)
    {
        Task::create([
            'task'=>$request->task,
            'done'=>0,
            'user_id'=>$request->user()->id,
        ]);

        return redirect()->route('task.index');

    }

    public function edit(Task $task,Request $request)
    {
        return view('task.edit',compact('task'));
    }


    public function update(Task $task,Request $request)
    {
        $task->update([
            'task'=>$request->task,
            'done'=>boolval($request->done),
        ]);
        return redirect()->route('task.index');
    }

    public function destroy(Task $task){

        $task->delete();
        return redirect()->route('task.index');
    }
}
