@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Filmes</h1>
@stop

@section('content')
<a href="artigos/create" class="btn btn-primary mb-3">Adicionar</a>

<table id="artigos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%"">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Gênero</th>
            <th scope="col">Data</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($artigos as $artigo)

        <tr>
            <td>{{$artigo->id}}</td>
            <td>{{$artigo->codigo}}</td>
            <td>{{$artigo->nome}}</td>
            <td>{{$artigo->genero}}</td>
            <td>{{$artigo->data}}</td>
            <td>
                <form action="{{ route ('artigos.destroy',$artigo->id)}}" method="POST">
                <a href="/artigos/{{$artigo->id}}/edit"class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
    $('#artigos').DataTable({
      "lengthMenu": [[5, 10, 50, -1],[5, 10, 50, "ALL"]]  
    });
} );
</script>
@stop
