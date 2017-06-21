<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
    	return view('backend.product',['isActive'=>'product']);
    }
    public function getAdd(){
    	return view('backend.product-add',['isActive'=>'product']);
    }
    public function postAdd(Request $request){
    	dd($request->all());
    	return view('backend.product-add',['isActive'=>'product']);
    }
}
