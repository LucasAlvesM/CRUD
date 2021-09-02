

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Criar Registros</h2>

<form action="/artigos" method="POST">
<?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel_crud\resources\views/artigo/create.blade.php ENDPATH**/ ?>