<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use App\Models\Enquiry;
use App\Models\CertificationCourse;



class AuthController extends Controller
{


    // //dashboard
    public function dashboard()
    {
       $enquiryCount = Enquiry::count();
        // Remove old visitors
        Visitor::where('visited_at', '<', now()->subMinutes(5))->delete();

        // Count current active visitors
        $currentVisitors = Visitor::count();
        
       $courses = CertificationCourse::all();


       return view('backend.pages.dashboard', compact( 'enquiryCount', 'currentVisitors', 'courses'));
    }

    //signup

    public function signup()
    {
        return view('backend.pages.auth.signup');
    }

    public function signupPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'usertype' => 'user', // Default user type
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully.');
    }


    public function login()
    {
        return view('backend.pages.auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->with('success', 'You are successfully logged in!');
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // Redirect to login page or another page
    }
}
