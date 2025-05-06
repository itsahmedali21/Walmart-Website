<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth; // Add this to use Auth::attempt
use Illuminate\Support\Facades\Hash; // Add this to use Hash::make

class ProfileController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:profiles,email',
            'password' => 'required|confirmed',
        ]);

        // Manually hash the password before saving
        $data['password'] = Hash::make($data['password']);  
        $profile = Profile::create($data);

        if ($profile) {
            return redirect()->route('login')->with('success', 'Registered successfully');
        } else {
            return back()->with('error', 'Registration failed');
        }
    }

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required',
    ]);

    $user = Profile::where('email', $credentials['email'])->first();

    if (!$user) {  
        return back()->with('error',  'Invalid email or password.');
    }
    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard');
    } else{
        return back()->with('error',  'Invalid  password in  incorrect.');

    }
}
  public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }
    }
    public function logout(){
        Auth::logout();
        return view('login');
    }
}
