<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('status_id','asc')->paginate();
        return view('manager.tasks',compact('tasks'));
    }

    public function task_pending()
    {
        $tasks = Task::where('status_id',1)->paginate();
        return view('manager.tasks_pending',compact('tasks'));
    }

    public function task_sent()
    {
        $tasks = Task::where('status_id',2)->paginate();
        return view('manager.tasks_sent',compact('tasks'));
    }

    public function task_inprogress()
    {
        $tasks = Task::where('status_id',3)->paginate();
        return view('manager.tasks_inprogress',compact('tasks'));
    }

    public function task_finish()
    {
        $tasks = Task::where('status_id',4)->paginate();
        return view('manager.tasks_finish',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('role','employee')->get();
        return view('manager.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);
        if(!$request->has('employees'))
        {
            $data=[
                'description' =>$request->description,
                'status_id' => 1
            ];
            $task= Task::query()->create($data);
            // $task->users()->sync($request->get("employees"));
            return redirect()->route('task.index');
        }
        else
        {
            $data=[
                'description' =>$request->description,
                'status_id' => 2
            ];
            $task= Task::query()->create($data);
            $task->users()->sync($request->get("employees"));
            return redirect()->route('task.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::query()->findOrFail($id);
        $users = User::where('role','employee')->get();
        return view('manager.edit', compact('task','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::query()->findOrFail($id);
        $request->validate([
            'description' => 'required',
        ]);
        if(!$request->has('employees'))
        {
            $data=[
                'description' =>$request->description,
                'status_id' => 1
            ];
            $task->users()->sync($request->get("employees"));
            $task= Task::query()->where('id',$id)->update($data);
            return redirect()->route('task.index');
        }
        else
        {
            $data=[
                'description' =>$request->description,
                'status_id' => 2
            ];
            $task->users()->sync($request->get("employees"));
            $task= Task::query()->where('id',$id)->update($data);
            return redirect()->route('task.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::query()->find($id)->delete();
        return back();
    }
}
