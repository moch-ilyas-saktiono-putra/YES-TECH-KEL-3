<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index ()
    {
        return view('auth.login');
    }

    public function login (Request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login');
        }
        
    }

    public function logout ()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
