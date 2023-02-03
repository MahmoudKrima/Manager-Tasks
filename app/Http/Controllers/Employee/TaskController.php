<?php

namespace App\Http\Controllers\Employee;

use App\Models\Admin\Task;
use App\Models\Admin\Status;
use Illuminate\Http\Request;
use App\Models\Admin\EmployeeTasks;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function sent_task()
    {
        $tasks = EmployeeTasks::where('user_id', Auth::user()->id)->paginate();
        return view('employee.sent_tasks',compact('tasks'));
    }

    public function inprogress_task()
    {
        $tasks = EmployeeTasks::where('user_id', Auth::user()->id)->paginate();
        return view('employee.inprogress_tasks',compact('tasks'));
    }

    public function finish_task()
    {
        $tasks = EmployeeTasks::where('user_id', Auth::user()->id)->paginate();
        return view('employee.finish_tasks',compact('tasks'));
    }

    public function edit_status($id)
    {
        $task = Task::find($id);
        return view('employee.edit_status', compact('task'));
    }

    public function status_update(Request $request,$id){
        $task=Task::find($id);
        $task->update([
            'status_id' => $request->status
        ]);
        return back();
    }
}
