<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
//use App\Http\Requests\PostRequest;
class SignupController extends Controller
{
    public function register()
    {
    	return view('account.reg');
    }

    public function PostSignup(Request $request)
   {
        $user= new User;
   		$user->firstname =$request->firstname;
   		$user->lastname  =$request->lastname;
   		$user->email     =$request->email;
        $user->password =bcrypt($request['password']);
   		$user->sex       =$request->sex;
   		$user->phone_numb =$request->phone_numb;
        $user->save();

   		session()->flash('success', 'Registration is successful');
   		return redirect()->back();
    
   }


}
