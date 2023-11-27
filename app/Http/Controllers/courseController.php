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

    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', ['course' => $course]);
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'language' => 'required',
            'difficulty' => 'required',
            'instructor' => 'required',
            'email' => 'required|email',
            'image' => 'image|nullable|max:1999',
        ]);
    
        $course = new Course;
        $course->title = $validatedData['title'];
        $course->description = $validatedData['description'];
        $course->language = $validatedData['language'];
        $course->difficulty = $validatedData['difficulty'];
        $course->instructor = $validatedData['instructor'];
        $course->email = $validatedData['email'];
    
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('courseImages', 'public');
            $course->image_path = $imagePath;
        }
    
        $course->save();
        return redirect()->route('courses.index');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'language' => 'required',
            'difficulty' => 'required',
            'instructor' => 'required',
            'email' => 'required|email',
            'image' => 'image|nullable|max:1999',
        ]);
    
        $course = Course::find($id);
    
        $course->title = $validatedData['title'];
        $course->description = $validatedData['description'];
        $course->language = $validatedData['language'];
        $course->difficulty = $validatedData['difficulty'];
        $course->instructor = $validatedData['instructor'];
        $course->email = $validatedData['email'];
    
        if($request->hasFile('image')){
            // Lógica para manejar el archivo de imagen
            $imagePath = $request->file('image')->store('courseImages', 'public');
            $course->image_path = $imagePath;
        }
    
        $course->save();
    
        return redirect()->route('courses.index');
    }
    




    public function show($course, $category)
    {
        return view("courses.show", ["course" => $course], ["category" => $category]);
    }



}
