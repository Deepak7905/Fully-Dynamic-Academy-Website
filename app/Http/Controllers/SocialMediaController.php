<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;


class SocialMediaController extends Controller
{
   
    public function create()
    {
        return view('backend.pages.social_media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $socialMedia = new SocialMedia;
        $socialMedia->name = $request->name;
        $socialMedia->url = $request->url;

        if ($request->hasFile('logo')) {
            // Delete old image if it exists
            if ($socialMedia->logo && file_exists(public_path('images/social-media/' . $socialMedia->logo))) {
                unlink(public_path('images/social-media/' . $socialMedia->logo));
            }

            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/social-media'), $imageName);

            $socialMedia->logo = $imageName;
        }

        $socialMedia->save();

        return redirect()->back()->with('success', 'Social media link added successfully.');
    }

    public function index()
    {
        $socialMediaLinks = SocialMedia::all();
        return view('backend.pages.social_media.index', compact('socialMediaLinks'));
    }


    //edit
    public function edit(SocialMedia $socialMedia)
    {
        return view('backend.pages.social_media.edit', compact('socialMedia'));
    }

    public function update(Request $request, SocialMedia $socialMedia)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $socialMedia->name = $request->name;
        $socialMedia->url = $request->url;

        if ($request->hasFile('logo')) {
            // Delete old image if it exists
            if ($socialMedia->logo && file_exists(public_path('images/social-media/' . $socialMedia->logo))) {
                unlink(public_path('images/social-media/' . $socialMedia->logo));
            }

            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/social-media'), $imageName);

            $socialMedia->logo = $imageName;
        }

        $socialMedia->save();

        return redirect()->route('social_media.index')->with('success', 'Social media link updated successfully.');
    }

    //delete
    public function destroy(SocialMedia $socialMedia)
    {
        if ($socialMedia->logo && file_exists(public_path('images/social-media/' . $socialMedia->logo))) {
            unlink(public_path('images/social-media/' . $socialMedia->logo));
        }

        $socialMedia->delete();

        return redirect()->route('social_media.index')->with('success', 'Social media link deleted successfully.');
    }

}
