<?php 

namespace App\Repository ;

use App\Http\Resources\CategoryResource;
use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface {

    public function index(){

        $categories = Category::with('tasks')->get();
        return CategoryResource::collection($categories);

    }
    public function create(){
        
    }
    public function store($request){
        $request->validate([
            'name'=>'required'
        ]);

        $category = Category::create([
            'name'=>$request->name 
        ]);
        return new CategoryResource($category);
    }
    public function show($id){
        $category = Category::findOrFail($id);

        return new CategoryResource($category);
    }
    public function edit($id){
        
    }
    public function update( $category , $request){
        $request->validate([
            'name'=>'required'
        ]);
        $category->update([
            'name'=>$request->name 
        ]);
        return new CategoryResource($category);
    }
    public function delete($category){
        $category->delete();
        return response()->json([
            'msg'=>'deleted successfully'
        ],200);
    }


}