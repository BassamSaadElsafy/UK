<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request;
use App\Admin;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Hash;
class AdminAuth extends Controller
{
    public function login(){
		
    	return view('admin.login');
    }

    public function dologin(Request $request){
		
		
    	$this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
		]);		
		 
		if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
			// dd('doneee');
    		return redirect('admin');
		}
		else
		{
    		session()->flash('uk_error',trans('admin.incorrect_information_login'));
    		return redirect(aurl('login'));
    	}

    }

    public function logout(){
    	auth()->guard('admin')->logout();
    	return redirect(aurl('login'));     // admin/login
    }

    
    
}
