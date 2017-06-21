<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardControler extends Controller
{
    public function Index(){
    	return view('backend.dashboard',['isActive'=>'overview']);
    }
}
