<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class IndexController extends Controller
{
    public function getIndex(){  
    	$category			=	Category::all();
        $menu               =   Category::where('parent_id',0)->get();
    	$product 			= 	Product::where('delete',0)->take(20)->orderBy('id','desc')->get();
    	// dd($category,$menu);
    	return view('layouts.main-content',compact('category','menu','product'));
    }

    public function postSearch(Request $request){
    	$product	=	Product::where([['category_id',$request->id],['delete',0]])->get();

    	return response()->json(array('product'=>$product));
    }
}