<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;


class AboutController extends Controller
{

    // Show a list of about sections
    public function index()
    {
        $aboutSections = About::all(); // Fetch all about sections
        return view('backend.pages.about.index', compact('aboutSections'));
    }

    // Show the form to create a new about section
    public function create()
    {
        return view('backend.pages.about.create');
    }

    
    // Store a newly created about section
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        $data = $request->only(['heading', 'content']);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/about-images'), $imageName);
            $data['image'] = 'images/about-images/' . $imageName;
        }

        About::create($data);

        return redirect()->route('about.index')->with('success', 'About section created successfully.');
    }
    // Show the form to edit an existing about section
    public function edit(About $about)
    {
        return view('backend.pages.about.edit', compact('about'));
    }

    // Update an existing about section
     // Update an existing about section
     
    // Update an existing about section
    public function update(Request $request, $id)
{
    // Find the existing record
    $about = About::findOrFail($id);

    // Validate the incoming request
    $request->validate([
        'heading' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validation rules
    ]);

    // Handle image upload and deletion
    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($about->image && file_exists(public_path('images/about-images/' . $about->image))) {
            unlink(public_path('images/about-images/' . $about->image));
        }

        // Store the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/about-images'), $imageName);

        // Update the image name in the database
        $about->image = $imageName;
    }

    // Update other fields
    $about->heading = $request->input('heading');
    $about->content = $request->input('content');
    $about->save();

    return redirect()->route('about.index')->with('success', 'About section updated successfully.');
}
   public function destroy(About $about)
{
    // Check if the about has an associated image and if the image file exists
    if ($about->image && file_exists(public_path('images/about-images/' . $about->image))) {
        // Delete the image file
        unlink(public_path('images/about-images/' . $about->image));
    }

    // Delete the about record from the database
    $about->delete();

    // Redirect to the banners index page with a success message
    return redirect()->route('about.index')->with('success', 'about deleted successfully.');
}
}

