@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestion de ciudades</h1>
@stop
@section('content')
<p>Editar el siguiente nombre de ciudad</p>
<form method="post" action="updateciudad/{{$ciudad->id}}" class= "row g-3">
    @csrf 
    @method('patch')
    <div class="col-auto">
        <input type="text" value="{{$ciudad->nombre}}" name="ciudad"
        placeholder= "Escriba el nombre nuevo" required class="form-control">
</div>
<div class="col-auto">
    <button type="submit" class= "btn btn-success"><i class= "fa-fa-save"></i></button>
</div>
</form>   
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop