<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->put('email', $request->input('email'));
            $request->session()->put('password', $request->input('password'));

            return redirect()->intended('/dashboard');
        } else {
            // Invalid credentials
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
