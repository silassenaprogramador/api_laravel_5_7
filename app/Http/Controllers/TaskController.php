<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * 
     */
    public function index(){

        return Task::all();
    }

    /**
     * 
     */
    public function store(Request $request){

        $request->validate(Task::$rules);        
        
        $campos = $request->all();
        return Task::create($campos);
    }

    /**
     * 
     */
    public function show(Task $task){

        return $task;
    }

    /**
     * 
     */
    public function update(Request $request, Task $task){

        $request->validate(Task::$rules); 

        $task->fill($request->all());
        $task->save();
        return $task;
    }

    /**
     * 
     */
    public function destroy(Task $task){

        $task->delete();
        return response()->json(['msg'=> "success"],200);
    }

}
