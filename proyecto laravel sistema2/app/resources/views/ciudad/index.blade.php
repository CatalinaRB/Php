@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestion de ciudades</h1>
    @isset($mensaje)
      {{$mensaje}}
    @endisset
@stop

@section('content')
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  +
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nombre de la ciudad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="storeciudad">
        @csrf
      <div class="modal-body">
        <input type="text" name="ciudad">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
</form>
    </div>
  </div>
</div>

    <p>Lista de ciudades</p>
    <table class="l">
        <thead>
            <tr>
                
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->nombre}}</td>
                
                <td class="col-1"><a href="showciudad/{{$c->id}}" target="_blank" class="btn">Ver</a></td>
                <td class="col1-"><a href="editciudad/{{$c->id}}" class="btn btn-sm-primary">🔃</a><td>
                <td class="col-1">
                  <form method="post" action="deleteciudad/{{$c->id}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-outline-danger">❌</button>
</form>  
            </td>
            @endforeach
        </tbody>
    </table>
    {{$ciudades->links()}}
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop