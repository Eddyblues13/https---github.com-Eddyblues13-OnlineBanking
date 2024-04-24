<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function verify()
    {
        return view('auth.reg');
    } 
    public function terms()
    {
        return view('auth.terms');
    } 
}
