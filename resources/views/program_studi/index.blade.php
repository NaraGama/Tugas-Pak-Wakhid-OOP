@extends('adminlte::page')

@section('title', 'Program Studi')

@section('content_header')
    <h1>Program Studi</h1>
@stop

@section('content')
    <p>Data Program Studi</p>
    @foreach ($prodi as $item)
    {{$item->nama_prodi}}

    <br>
    @endforeach
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop