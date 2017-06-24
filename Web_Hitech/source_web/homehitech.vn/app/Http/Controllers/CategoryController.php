<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Session;
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
    public function getList(){
        $category = Category::where('delete','0')->select('id','name')->get();
        return response()->json(array('data'=>$category));
    }
    public function postDelete(Request $request){
        $update = Category::where('id',$request->id)->update(['delete'=>1]);
        if($update){
            return response()->json(array('status'=>'ok'));
        }else{
            return response()->json(array('status'=>'ng'));
        }
    }
    public function getEdit($id){
        $product = Category::where([['delete','0'],['id',$id]])->select('id','name')->get();
        return view('backend.category-edit',['isActive'=>'category','data'=>$product]);
    }
    public function postEdit(CategoryRequest $request){
        $update = Category::where('id',$request->id)->update([
                                    'name' => $request->ten_danhmuc
                                    ]);    
        
        if($update){
            Session::flash('status', 'Sửa danh mục thành công!');
            return redirect()->route('admin.category');
        }else{
            return view('backend.category-edit',['isActive'=>'category'])->withErrors();
        }       
    }
}
