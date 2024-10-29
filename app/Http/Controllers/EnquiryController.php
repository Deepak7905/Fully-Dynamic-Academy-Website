<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Map;




class EnquiryController extends Controller
{
    public function create()
    {
        $mapUrl = Map::first()->map_url; // Retrieve the map URL from the database
    
        return view('front.pages.enquiry', compact('mapUrl'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'contact-name' => 'required|string|max:255',
            'contact-email' => 'required|email|max:255',
            'contact-phone' => 'required|string|max:15',
            'contact-qualification' => 'required|string|max:255',
            'contact-location' => 'required|string|max:255',
            'contact-message' => 'required|string',
        ]);

        Enquiry::create([
            'name' => $request->input('contact-name'),
            'email' => $request->input('contact-email'),
            'phone' => $request->input('contact-phone'),
            'qualification' => $request->input('contact-qualification'),
            'location' => $request->input('contact-location'),
            'message' => $request->input('contact-message'),
        ]);

        return redirect()->route('enquiry.create')->with('success', 'Your enquiry has been submitted successfully.');
    }


    //admin side 
    public function showPending()
    {
        $enquiries = Enquiry::where('status', 'pending')->get();
        return view('backend.pages.enquiries.pending', compact('enquiries'));
    }

    public function markAsDone($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->status = 'done';
        $enquiry->save();

        return redirect()->route('enquiries.pending')->with('success', 'Enquiry marked as done.');
    }

    public function showHistory()
    {
        $enquiries = Enquiry::where('status', 'done')->get();
        return view('backend.pages.enquiries.history', compact('enquiries'));
    }
  

    // map

}
