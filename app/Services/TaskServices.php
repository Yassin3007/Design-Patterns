<?php 
namespace App\Services;

use App\Models\Task;
use App\Http\Resources\TaskResource;
use Illuminate\Support\Facades\Validator;

class TaskServices {

    public function getTasks(){
        $tasks = Task::all();
        return TaskResource::collection($tasks) ;
    }
    public function getTask($task){
        
        return new TaskResource($task);
    }

    public function storeTask( $request ){
        $request->validate([
            'name'=>'required',
            'category_id'=>'required|exists:categories,id'
        ]);
        $task = Task::create([
            'name'=>$request->name ,
            'category_id'=>$request->category_id 
        ]);
        return new TaskResource($task);
    }

    public function editTask($task , $request ){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'category_id'=>'required|exists:categories,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $task->update([
            'name'=>$request->name ,
            'category_id'=>$request->category_id 
        ]);
        return new TaskResource($task);
    }

    public function deleteTask($task){
        $task->delete();
        return response()->json([
            'msg'=>'deleted successfully'
        ],200);
    }

}