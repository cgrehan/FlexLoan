<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function sign()
    {
        return inertia('Auth/Login');   // Vue component
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('You have Successfully loggedin');

        }
        return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
    }

    public function signoutUser() {
        Session::flush();
        Auth::logout();
        return redirect()->route("login");

    }
}
