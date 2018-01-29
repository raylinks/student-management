<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function getLog()
    {
    	return view('account.log');
    }

    public function postSignin(Request $request)
    {
    	$this->validation=($request);
    	if(Auth::attempt([
    		'email'=>$request->input('email'),
    		'password'=>$request->input('password'),
    
    		],$request->has('remember')))
    {
    	return redirect('dashboard');
    } else
        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),


            ],$request->has('remember')))
        {
            return redirect('dashboard');
        }
      session()->flash('danger', 'Authentication failed');
        	return redirect()->back();
}
	public function validation($request)
	{
		return $this->validate($request, [
       	    'email'=> 'required', 
    	   'password' => 'required',

    	   ]);
	}
}
