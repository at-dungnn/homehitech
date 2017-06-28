<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CskhController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function Index(){
    	return view('backend.cskh',['isActive'=>'cskh']);
    }
    public function getAdd(){
    	return 1;
    }
}
