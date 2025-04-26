<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function course_view()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function show($id)
    {
        return view('courses.show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('courses.edit', ['id' => $id]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // Logic to store the course
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category' => 'nullable|string|max:255',
            'lessons_count' => 'nullable|integer',
            'rating' => 'nullable|numeric|between:0,5',
            'seats' => 'nullable|integer',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated = $request->only([
            'title',
            'description',
            'start_date',
            'end_date',
            'category',
            'lessons_count',
            'rating',
            'seats',
            'price',
            'image',
        ]);

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('courses', 'public/assets/img/course');
        //     $data['image'] = $imagePath;
        // }

        $data = $validated;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('assets/img/course'), $imageName);
            $data['image'] = "assets/img/course/{$imageName}";
        }

        Course::create($data);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }



    public function update(Request $request, $id)
    {
        // Logic to update the course
        return redirect()->route('courses.show', ['id' => $id]);
    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index', ['id' => $id])->with('success', 'Course deleted successfully!');
    }
    public function enroll($id)
    {
        // Logic to enroll in the course
        return redirect()->route('courses.show', ['id' => $id]);
    }
    public function unenroll($id)
    {
        // Logic to unenroll from the course
        return redirect()->route('courses.show', ['id' => $id]);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        // Logic to search for courses
        return view('courses.search', ['query' => $query]);
    }
    public function filter(Request $request)
    {
        $filters = $request->all();
        // Logic to filter courses
        return view('courses.filter', ['filters' => $filters]);
    }
}
