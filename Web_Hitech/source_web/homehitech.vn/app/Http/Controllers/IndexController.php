<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Contact;
class IndexController extends Controller
{
    public function getIndex(){   
    	$productLight1 		= Product::where('category_id','1')->get();
    	$productLight2 		= Product::where('category_id','2')->get();
    	$category 			= Category::where('delete','0')->get();
    	$contact 			= Contact::first();
    	return view('index',[	'productLight1'=> $productLight1,
					    		'productLight2'=> $productLight2,
					    		'category'     => $category,
					    		'contact'      => $contact]);
    }
}
