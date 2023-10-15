{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Show Course ' . $course)

{{-- More than one line --}}
@section('content')
    <h1>Este es el Show</h1>
    <h2> Welcome to the course: {{ $course }}, of the category: {{ $category }}</h2>

@endsection
