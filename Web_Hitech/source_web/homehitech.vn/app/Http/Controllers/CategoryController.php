<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
class CategoryController extends Controller
{
    public function Index(){
        $category=Category::where('delete','0')->get();
    	return view('backend.category',['isActive'=>'category','category'=>$category]);
    }
    public function getAdd(){
    	return view('backend.category-add',['isActive'=>'category']);
    }
    public function postAdd(CategoryRequest $request){
        $category         = new Category;
        $category->name   = $request->ten_danhmuc;
        $category->delete = 0;
        $save = $category->save();
        if($save){
            return redirect()->route('admin.category');
        }else{
            return view('backend.category-add',['isActive'=>'category'])->withErrors();
        }
    	
    }
}
