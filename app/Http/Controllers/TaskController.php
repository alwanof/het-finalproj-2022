<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class TaskController extends Controller
{
    // update task to be completed
    public function update(request $request, Task $task)
    {


        $task->update(['completed' => $request->has('completed')]);

        return back();
    }
    public function store(Request $request, Project $project)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        $data['project_id'] = $project->id;
        Task::create($data);

        return back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
