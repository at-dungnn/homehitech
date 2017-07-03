<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class LienHeController extends Controller
{
    public function getIndex(){  
    	return view('layouts.lienhe-content');
    }
}