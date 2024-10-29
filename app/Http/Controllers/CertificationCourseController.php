<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificationCourse;


class CertificationCourseController extends Controller
{

    public function index()
    {
        $courses = CertificationCourse::all();
        return view('backend.pages.certification-courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = CertificationCourse::findOrFail($id);
        return view('backend.pages.certification-courses.show', compact('course'));
    }

    public function create()
    {
        return view('backend.pages.certification-courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'time' => 'required|integer',
            'status' => 'required|string',
            'description' => 'required|string',
            'apply_url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $course = new CertificationCourse();
        $course->heading = $request->heading;
        $course->time = $request->time;
        $course->status = $request->status;
        $course->description = $request->description;
        $course->apply_url = $request->apply_url;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/certification-courses'), $imageName);
            $course->image = $imageName;
        }

        $course->save();

        return redirect()->route('certification-courses.index')->with('success', 'Certification course created successfully.');
    }

    public function edit(CertificationCourse $course)
    {
        return view('backend.pages.certification-courses.edit', compact('course'));
    }

    public function update(Request $request, CertificationCourse $course)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'time' => 'required|integer',
            'status' => 'required|string',
            'description' => 'required|string',
            'apply_url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $course->heading = $request->input('heading');
        $course->time = $request->input('time');
        $course->status = $request->input('status');
        $course->description = $request->input('description');
        $course->apply_url = $request->input('apply_url');

        if ($request->hasFile('image')) {
            if ($course->image && file_exists(public_path('images/certification-courses/' . $course->image))) {
                unlink(public_path('images/certification-courses/' . $course->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/certification-courses'), $imageName);
            $course->image = $imageName;
        }

        $course->save();

        return redirect()->route('certification-courses.index')->with('success', 'Certification course updated successfully.');
    }

    public function destroy(CertificationCourse $course)
    {
        if ($course->image && file_exists(public_path('images/certification-courses/' . $course->image))) {
            unlink(public_path('images/certification-courses/' . $course->image));
        }
    
        $course->delete();
    
        return redirect()->route('certification-courses.index')->with('success', 'Certification course deleted successfully.');
    }
}
