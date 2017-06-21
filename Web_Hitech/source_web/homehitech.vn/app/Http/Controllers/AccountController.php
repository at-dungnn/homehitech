<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function Index(){
    	return view('backend.users',['isActive'=>'users']);
    }
}
