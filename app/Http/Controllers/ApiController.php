<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teach;
use App\Cla;

class ApiController extends Controller
{
    public function teacher()
    {
        $teache = teach::all();
     return response()->json($teache);
    }

    public function allClass()
    {
        $clas = cla::all();
        return response()->json($clas);
    }
}
