<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Category;
class DashboardControler extends Controller
{
    public function Index(){
    	$product=Product::where('delete','0')->count();
    	$category=Category::where('delete','0')->count();
    	return view('backend.dashboard',['isActive'=>'overview','product'=>$product,'category'=>$category]);
    }
}
