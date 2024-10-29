<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{


public function settings()
{
    $user = Auth::user(); // Get the currently authenticated user


    return view('backend.pages.profile.settings',compact('user'));
}

// app/Http/Controllers/ProfileController.php
public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
    ]);

    $user = Auth::user();
    $user->update($request->only('name', 'email'));

    return redirect()->route('profile.settings')->with('success', 'Profile updated successfully.');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'Current password is incorrect.']);
    }

    $user->password = bcrypt($request->new_password);
    $user->save();

    return redirect()->route('profile.settings')->with('success', 'Password changed successfully.');
}


public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login'); // Redirect to the login page or another page
}

}
