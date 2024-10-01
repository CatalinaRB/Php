

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Gestion de ciudades</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<p>Editar el siguiente nombre de ciudad</p>
<form method="post" action="updateciudad/<?php echo e($ciudad->id); ?>" class= "row g-3">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('patch'); ?>
    <div class="col-auto">
        <input type="text" value="<?php echo e($ciudad->nombre); ?>" name="ciudad"
        placeholder= "Escriba el nombre nuevo" required class="form-control">
</div>
<div class="col-auto">
    <button type="submit" class= "btn btn-success"><i class= "fa-fa-save"></i></button>
</div>
</form>   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Caty_php\sistema2-app\resources\views/ciudad/edit.blade.php ENDPATH**/ ?>