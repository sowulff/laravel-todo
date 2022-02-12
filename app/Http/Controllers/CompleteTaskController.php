<?php

namespace App\Http\Controllers;

use App\Models\Task;


use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Task $task)
    {
        $task->completed = true;
        $task->save();

        return back();
    }
}
