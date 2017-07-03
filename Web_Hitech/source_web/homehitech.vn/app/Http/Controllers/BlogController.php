<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class BlogController extends Controller
{
    public function getIndex(){  
    	$news = News::paginate(1);
    	return view('home.blog-content',compact('news'));
    }

    public function showBlog($slug){
    	$news = News::where('slug',$slug)->get()->first();
    	return view('home.blog-detail',compact('news'));
    }

}