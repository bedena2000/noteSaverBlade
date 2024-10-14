<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function create(Request $request) {
        
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
        ]);

        auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        return redirect()->route('dashboard');
    }
}
