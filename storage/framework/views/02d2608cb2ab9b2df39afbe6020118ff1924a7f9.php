

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de Filmes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
        <?php $__currentLoopData = $artigos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artigo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($artigo->id); ?></td>
            <td><?php echo e($artigo->codigo); ?></td>
            <td><?php echo e($artigo->nome); ?></td>
            <td><?php echo e($artigo->genero); ?></td>
            <td><?php echo e($artigo->data); ?></td>
            <td>
                <form action="<?php echo e(route ('artigos.destroy',$artigo->id)); ?>" method="POST">
                <a href="/artigos/<?php echo e($artigo->id); ?>/edit"class="btn btn-info">Editar</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel_crud\resources\views/artigo/index.blade.php ENDPATH**/ ?>