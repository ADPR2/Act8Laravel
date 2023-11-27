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
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $course->title) }}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $course->description) }}</textarea>
                @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="language">Lenguaje:</label>
                <input type="text" class="form-control" id="language" name="language" value="{{ old('language', $course->language) }}">
                @if ($errors->has('language'))
                    <span class="text-danger">{{ $errors->first('language') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="difficulty">Dificultad:</label>
                <select class="form-control" id="difficulty" name="difficulty">
                    <option value="">Seleccione una dificultad</option>
                    <option value="Beginner" {{ (old('difficulty', $course->difficulty) == 'Beginner') ? 'selected' : '' }}>Beginner</option>
                    <option value="Intermediate" {{ (old('difficulty', $course->difficulty) == 'Intermediate') ? 'selected' : '' }}>Intermediate</option>
                    <option value="Advanced" {{ (old('difficulty', $course->difficulty) == 'Advanced') ? 'selected' : '' }}>Advanced</option>
                </select>
                @if ($errors->has('difficulty'))
                    <span class="text-danger">{{ $errors->first('difficulty') }}</span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="instructor">Instructor:</label>
                <input type="text" class="form-control" id="instructor" name="instructor" value="{{ old('instructor', $course->instructor) }}">
                @if ($errors->has('instructor'))
                    <span class="text-danger">{{ $errors->first('instructor') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $course->email) }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
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
