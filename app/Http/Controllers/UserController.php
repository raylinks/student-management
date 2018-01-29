<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
    	return view('account.reg');
    }

    public function ind()
    {
        return view('index');
    }
}
