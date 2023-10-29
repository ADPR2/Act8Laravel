{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Index')

{{-- More than one line --}}
@section('content')
    <h1> This is Index </h1>
    <table>
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
            <td class="actions-cell">
            <a class="edit-link" href="{{ route('courses.edit', ['id' => $course->id]) }}">Edit</a>
            <form action="{{ route('courses.delete', ['id' => $course->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="eliminar-link">Eliminar</button>
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    .edit-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-align: center;
    border-radius: 4px;
    text-decoration: none;
}

.edit-link:hover {
    background-color: #0056b3;
}

</style>

@endsection
@push('styles')
        
        <a class="add-course-button" href="{{ route('courses.create') }}">Crear nuevo curso</a>

        <link rel="stylesheet" href="{{ asset('pico-bootstrap-grid.min.css') }}">
        
    @endpush