<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class CreateTaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string|min:5'
        ]);
        $task = new Task();
        $task->description = $request->input('description');
        $task->user_id = Auth::id();
        $task->save();

        return back();
    }
}
