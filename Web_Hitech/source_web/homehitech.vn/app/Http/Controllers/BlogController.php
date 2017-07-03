<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class BlogController extends Controller
{
    public function getIndex(){  
    	return view('layouts.blog-content');
    }
}