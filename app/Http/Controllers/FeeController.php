<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    /*public function getPayment(){
        return response()->json();
    }*/

    public function getPayment(){
        return view('Fees.Payment');
    }
}
