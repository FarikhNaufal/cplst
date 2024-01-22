<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function signUp(Request $request){
        $request->validate([
            'username' => ['required', 'unique:users,username', 'min:4', 'max:15', 'regex:/^[a-zA-Z0-9.-_]+$/'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            'username' => strtolower($request->username),
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect()->intended();
        } else {
            // return redirect()->back()->with();
        }
    }
}
