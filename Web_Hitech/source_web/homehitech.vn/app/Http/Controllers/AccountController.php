<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Auth,Session,Hash;
class AccountController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
    public function Index(){
    	return view('backend.users',['isActive'=>'users']);
    }
    public function postUpdate(UserRequest $request){

    	if($request->new_password==''){
    		$user = User::where('id',Auth::user()->id)->update(['name'=>$request->fullname]);
    	}else{
    		$current_password = Auth::User()->password;           
	      	if(Hash::check($request->cur_password, $current_password)){
	      		$user_id  	= Auth::User()->id;                       
		        $user  		= User::where('id',$user_id)->update(['name'=>$request->fullname,'password'=>Hash::make($request->new_password)]);
	      	}else{
	      		Session::flash('status', 'Mật khẩu hiện tại không đúng!');
	      		Session::flash('class', 'alert-danger');
    			return redirect()->back();
	      	}
    	}
    	if($user){
    		Session::flash('status', 'Cập nhật thành công!');
    		Session::flash('class', 'alert-success');
    		return redirect()->back();
    	}else{
    		return redirect()->back()->withErrors();
    	}
    }
}
