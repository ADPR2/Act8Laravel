{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Index')

{{-- More than one line --}}
@section('content')
<h1>Cursos</h1>
<h2>Aquí puedes visualizar los cursos.</h2>
<div class="text-right">
<a class="btn btn-secondary add-course-button"  href="{{ route('courses.create') }}">Crear nuevo curso</a>
</div>
<div class="table-responsive">
    
    <table class="table table-bordered">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Idioma</th>
            <th>Dificultad</th>
            <th>Instructor</th>
            <th>Email</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course['id']}}</td>
            <td>{{$course['title']}}</td>
            <td>{{$course['description']}}</td>
            <td>{{$course['language']}}</td>
            <td>{{$course['difficulty']}}</td>
            <td>{{$course['instructor']}}</td>
            <td>{{$course['email']}}</td>
            <td>{{$course['created_at']}}</td>
            <td>{{$course['updated_at']}}</td>

            <td>
                @if ($course->image_path)
                <img class="img-fluid course-image"  src="{{ asset('storage/' . $course->image_path)}}" alt="aqui va algo">
                @endif
            </td>
            <td class="actions-cell text-center">
            <a class="btn btn-primary edit-link" href="{{ route('courses.edit', ['id' => $course->id]) }}">Editar</a>
            <form action="{{ route('courses.delete', ['id' => $course->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger eliminar-link">Eliminar</button>
            </form>

            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection


@push('styles')
        
    @endpush