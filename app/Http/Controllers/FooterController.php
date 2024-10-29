<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;


class FooterController extends Controller
{
    public function edit()
    {
        $footer = Footer::first();

        // If no footer exists, use default values
        if (!$footer) {
            $footer = new Footer([
                'address' => 'Default Address',
                'phone' => 'Default Phone',
                'email' => 'default@example.com',
            ]);
        }

        return view('backend.pages.footer.edit', compact('footer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        $footer = Footer::first();
        if (!$footer) {
            // Create new footer record if none exists
            $footer = Footer::create([
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        } else {
            // Update existing footer record
            $footer->update([
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        }

        return redirect()->back()->with('success', 'Footer information updated successfully.');
    }
}
