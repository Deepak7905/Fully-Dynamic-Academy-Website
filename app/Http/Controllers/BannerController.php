<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::where('active', true)->get();
        return view('backend.pages.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('backend.pages.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/banner-images'), $imageName);
        }

        Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'active' => $request->has('active'),
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('backend.pages.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($banner->image && file_exists(public_path('images/banner-images/' . $banner->image))) {
                unlink(public_path('images/banner-images/' . $banner->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/banner-images'), $imageName);

            $banner->image = $imageName;
        }

        $banner->update([
            'title' => $request->title,
            'description' => $request->description,
            'active' => $request->has('active'),
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        // Delete image if it exists
        if ($banner->image && file_exists(public_path('images/banner-images/' . $banner->image))) {
            unlink(public_path('images/banner-images/' . $banner->image));
        }

        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }

    public function inactiveBanners()
    {
        $banners = Banner::where('active', false)->get();
        return view('backend.pages.banners.inactive', compact('banners'));
    }

    public function activate(Banner $banner)
    {
        $banner->update(['active' => true]);
        return redirect()->route('banners.inactive')->with('success', 'Banner activated successfully.');
    }
}
