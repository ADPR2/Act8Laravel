@extends('layouts.plantilla')

@section('title', 'Edit')

<h2> Editar curso existente </h2>

<form class="course-form" action="{{ route('courses.update', $course->id) }}"  enctype="multipart/form-data"  method="post">
    @csrf
    @method('PUT')

    <label for="title">Titulo:</label>
    <input type="text" id="title" name="title" value="{{ $course->title }}">

    <label for="description">Descripcion:</label>
    <textarea id="description" name="description">{{ $course->description }}</textarea>

    <label for="language">Lenguaje:</label>
    <input type="text" id="language" name="language" value="{{ $course->language }}">

    <label for="difficulty">Dificultad:</Label>
    <select id="difficulty" name="difficulty">
        <option value="Beginner" {{ $course->difficulty == 'Beginner' ? 'selected' : '' }}>Beginner</option>
        <option value="Intermediate" {{ $course->difficulty == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
        <option value="Advanced" {{ $course->difficulty == 'Advanced' ? 'selected' : '' }}>Advanced</option>
    </select>

    <label for="instructor">Instructor:</label>
    <input type="text" id="instructor" name="instructor" value="{{ $course->instructor }}">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $course->email }}">
  
    <input type="file" name="image">

    <input type="submit" value="Actualizar curso">
</form>

@push('styles')
    <link rel="stylesheet" href="{{ asset('pico-bootstrap-grid.min.css') }}">
@endpush
