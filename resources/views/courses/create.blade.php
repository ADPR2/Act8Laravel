{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Create')


<h2> Agrega un nuevo curso </h2>

<form class="course-form" action="{{ route('courses.store') }}" method="post">
@csrf
<label for="title">Titulo:</label>
<input type="text" id="title" name="title">

<label for="description">Descripcion:</label>
<textarea id="description" name="description"></textarea>

<label for="language">Lenguaje:</label>
<input type="text" id="language" name="language">

<label for="difficulty">Dificultad:</Label>
<select id="difficulty" name="difficulty">
    <option value="Beginner">Beginner</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Advanced">Advanced</option>
</select>

<label for="instructor">Instructor:</label>
<input type="text" id="instructor" name="instructor">

<label for="email">Email:</label>
<input type="email" id="email" name="email">

<input type="submit" value="Agregar curso">
</form>


@push('styles')
        
        <a class="add-course-button" href="{{ route('courses.create') }}">Crear nuevo curso</a>

        <link rel="stylesheet" href="{{ asset('pico-bootstrap-grid.min.css') }}">
        
    @endpush