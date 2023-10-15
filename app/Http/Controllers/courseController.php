<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
    // The method is called index, create, etc... We are using the views
    public function index()
    {
        return view("courses.index");
    }

    public function create()
    {
        return view("courses.create");
    }


    public function show($course, $category)
    {
        return view("courses.show", ["course" => $course], ["category" => $category]);
    }
}
