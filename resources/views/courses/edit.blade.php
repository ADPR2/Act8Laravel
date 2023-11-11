@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')

<h1>Editar Curso</h1>
<h2>Aquí podrás editar cursos existentes.</h2>
<br>
<form class="course-form" action="{{ route('courses.update', $course->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}">
            </div>

            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea class="form-control" id="description" name="description">{{ $course->description }}</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="language">Lenguaje:</label>
                <input type="text" class="form-control" id="language" name="language" value="{{ $course->language }}">
            </div>

            <div class="form-group">
                <label for="difficulty">Dificultad:</label>
                <select class="form-control" id="difficulty" name="difficulty">
                    <option value="Beginner" {{ $course->difficulty == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="Intermediate" {{ $course->difficulty == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                    <option value="Advanced" {{ $course->difficulty == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="instructor">Instructor:</label>
                <input type="text" class="form-control" id="instructor" name="instructor" value="{{ $course->instructor }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $course->email }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar curso</button>
        </div>
    </div>
</form>
<br>
<br>
@endsection

@push('styles')

@endpush
