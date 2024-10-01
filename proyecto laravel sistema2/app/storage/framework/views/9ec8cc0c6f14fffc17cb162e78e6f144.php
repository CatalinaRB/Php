<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Gestion de ciudades</h1>
    <?php if(isset($mensaje)): ?>
      <?php echo e($mensaje); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
        <?php echo csrf_field(); ?>
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
            <?php $__currentLoopData = $ciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($c->id); ?></td>
                <td><?php echo e($c->nombre); ?></td>
                
                <td class="col-1"><a href="showciudad/<?php echo e($c->id); ?>" target="_blank" class="btn">Ver</a></td>
                <td class="col1-"><a href="editciudad/<?php echo e($c->id); ?>" class="btn btn-sm-primary">🔃</a><td>
                <td class="col-1">
                  <form method="post" action="deleteciudad/<?php echo e($c->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-sm btn-outline-danger">❌</button>
</form>  
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($ciudades->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Caty_php\sistema2-app\resources\views/ciudad/index.blade.php ENDPATH**/ ?>