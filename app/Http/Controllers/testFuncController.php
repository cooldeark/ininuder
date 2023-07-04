<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testFuncController extends Controller
{
    public function test1 () {
        return view('index');
    }
    
}
