<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function create(Request $request) {


        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8' 
        ]);

        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Wrong credentials',
        ])->withInput($request->only('username'));


    }
}
