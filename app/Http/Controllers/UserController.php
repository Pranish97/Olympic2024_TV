<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }


    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return back()->with('email', 'User with this email already exists');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'phone_number' => $request->phone_number,
            'password' => $request->password
        ]);

        return redirect('/register')->with('success', 'Welcome! User have successfully registered to Olympic TV');
    }


    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        // Your existing code for credentials validation
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('login', 'User Logged In Successfully');
        }
        return back()->with('error', 'Invalid User')->onlyInput('email');
    }
}
