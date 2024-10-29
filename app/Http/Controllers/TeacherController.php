<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;


class TeacherController extends Controller
{


    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.pages.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('backend.pages.teachers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'post' => 'required|string|max:255',
            'experience' => 'required|integer|min:0',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/teacher-images'), $imageName);
        }

        Teacher::create([
            'name' => $request->name,
            'image' => $imageName,
            'post' => $request->post,
            'experience' => $request->experience,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Teacher created successfully.');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('backend.pages.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'post' => 'required|string|max:255',
            'experience' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($teacher->image && file_exists(public_path('images/teacher-images/' . $teacher->image))) {
                unlink(public_path('images/teacher-images/' . $teacher->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/teacher-images'), $imageName);

            $teacher->image = $imageName;
        }

        $teacher->update($request->only('name', 'post', 'experience'));

        return redirect()->route('teacher.index')->with('success', 'Teacher updated successfully.');
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('backend.pages.teachers.show', compact('teacher'));
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        if ($teacher->image && file_exists(public_path('images/teacher-images/' . $teacher->image))) {
            unlink(public_path('images/teacher-images/' . $teacher->image));
        }

        $teacher->delete();

        return redirect()->route('teacher.index')->with('success', 'Teacher deleted successfully.');
    }
}
