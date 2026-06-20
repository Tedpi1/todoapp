<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.signup');
    }

    function loginPost(Request $request){

    }

    function home(){
        return view('notes.home');
    }
}
