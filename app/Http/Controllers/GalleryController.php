<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('backend.pages.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.pages.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/gallery'), $imageName);

        Gallery::create([
            'heading' => $request->heading,
            'image' => $imageName,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery item added successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('backend.pages.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($gallery->image && file_exists(public_path('images/gallery/' . $gallery->image))) {
                unlink(public_path('images/gallery/' . $gallery->image));
            }

            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/gallery'), $imageName);

            $gallery->image = $imageName;
        }

        $gallery->update($request->only('heading'));

        return redirect()->route('gallery.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && file_exists(public_path('images/gallery/' . $gallery->image))) {
            unlink(public_path('images/gallery/' . $gallery->image));
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully.');
    }
}
