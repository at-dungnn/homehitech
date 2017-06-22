<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index(){
    	return view('backend.category',['isActive'=>'category']);
    }
    public function getAdd(){
    	return view('backend.category-add',['isActive'=>'category']);
    }
    public function postAdd(Request $request){
    	dd($request->all());
    	return view('backend.category-add',['isActive'=>'category']);
    }
}
