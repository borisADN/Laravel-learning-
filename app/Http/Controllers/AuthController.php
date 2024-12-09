<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create($fields);

        Auth::login($user);

        return redirect()->route('home');

        // return response()->json([
        //    'message' => 'User registered successfully',
        //     'user' => $user
        // ], 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($fields)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'error' => 'Invalid credentials'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('home');
    }
}
