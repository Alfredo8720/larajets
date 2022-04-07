<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokeController extends Controller
{
    public function __invoke(){
        return view('auth.login');        
    }
}
