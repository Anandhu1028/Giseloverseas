<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function dologin(){
        $input = ['email' => request('email'), 'password' => request('password')];
        
    
        if (auth()->attempt($input)) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('login')->with('message', 'Login is Invalid..!!!');
        }
    }
    
}
