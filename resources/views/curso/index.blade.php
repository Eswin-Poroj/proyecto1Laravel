@extends('layouts.plantilla')
@section('title', 'Cursos')
@section('content')
    <h1>Listando Cursos</h1>
@endsection

@php
$datos = \App\Models\Curso::all();
@endphp

@foreach ($datos as $dato)
<p>{{$dato -> $nombre}}</p>
<p>{{   $dato -> $descripcion}}</p>
@endforeach
