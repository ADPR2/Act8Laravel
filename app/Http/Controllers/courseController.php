<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class courseController extends Controller
{
    // The method is called index, create, etc... We are using the views
    public function index()
    {
        $courses = Course::all();
        return view("courses.index",['courses' => $courses]);
    }

    public function create()
    {
        return view("courses.create");
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->language = $request->language;
        $course->difficulty = $request->difficulty;
        $course->instructor = $request->instructor;
        $course->email = $request->email;
        $course->email_verified_at = $request->email_verified_at;
    
        $course->save();
        return redirect()->route('courses.index');
    }



    public function show($course, $category)
    {
        return view("courses.show", ["course" => $course], ["category" => $category]);
    }
}
