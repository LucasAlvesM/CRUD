@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<h2>Editar Registros</h2>

<form action="/artigos/{{$artigo->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input type="text" name="codigo" class="form-control" id="codigo" value="{{$artigo->codigo}}">
   
  </div>

  <div class="mb-3">
  <label for="" class="form-label">Nome</label>
  <input type="text" name="nome" class="form-control" id="nome" value="{{$artigo->nome}}">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">Genêro</label>
  <input type="text" name="genero" class="form-control" id="genero" value="{{$artigo->genero}}">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">Data de Estreia</label>
  <input type="date" name="data" class="form-control" id="data" value="{{$artigo->data}}">
  </div>

  <a href="/artigos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Ajustar</button>
  
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')

@stop
