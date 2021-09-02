@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Criar Registros</h2>

<form action="/artigos" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input type="text" name="codigo" class="form-control" id="codigo" tabindex="1">
   
  </div>

  <div class="mb-3">
  <label for="" class="form-label">Nome</label>
  <input type="text" name="nome" class="form-control" id="nome" tabindex="2">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">Genêro</label>
  <input type="text" name="genero" class="form-control" id="genero" tabindex="3">
  </div>

  <div class="mb-3 ">
  <label for="" class="form-label">Data de Estreia</label>
  <input type="date" name="data" class="form-control" id="data" tabindex="4">
  </div>

  <a href="/artigos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Adicionar</button>
  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
@stop
