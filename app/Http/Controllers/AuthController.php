<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function submitlogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('view.login')->with('success', 'Logout Succesfully');
    }

}
