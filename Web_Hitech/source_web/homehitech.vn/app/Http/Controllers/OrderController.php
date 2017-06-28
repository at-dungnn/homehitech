<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Session,Auth;
class OrderController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
	public function Index() {
		return view('backend.order',['isActive'=>'order']);
	}
}