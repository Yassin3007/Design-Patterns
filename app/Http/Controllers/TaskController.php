<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\TaskServices;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $taskServices ;
     public function __construct(TaskServices $taskServices)
     {
        $this ->taskServices = $taskServices;
     }

    public function index()
    {
        return $this->taskServices->getTasks();
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->taskServices->storeTask($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        
        return $this->taskServices->getTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     */
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        return $this->taskServices->editTask($task , $request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        return $this->taskServices->deleteTask($task);
    }
}
