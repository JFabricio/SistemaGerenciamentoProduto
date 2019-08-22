<title class="">Home</title>
<?php $__env->startSection('content'); ?>



    <div class="container">
    <div class="jumbotron jumbotron-fluid" style="margin-top:10%;">
         <div class="btn btn-dark"><a href="<?php echo e(route('produtos.create')); ?>" style="color:#FFFAFA;">Novo Produto</a></div> <br/> <br/> 
           
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Valor</th>
      <th scope="col">Data Entrada</th>
      <th scope="col">Data Saida</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($produto->codigo); ?></td>
      <td><?php echo e($produto->nome); ?></td>
      <td><?php echo e($produto->marca); ?></td>
      <td><?php echo e($produto->valor); ?></td>
      <td><?php echo e($produto->data_entrada); ?></td>
      <td><?php echo e($produto->data_saida); ?></td>
      <td><a class="btn btn-info" href="<?php echo e(route('produtos.edit',['produto'=>$produto->id])); ?>">Editar</a></td>
      <td><a class="btn btn-info" href="<?php echo e(route('produtos.destroy',['produto'=>$produto->id])); ?>">Deletar</a></td>
    </tr>
    </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/SGProdutos/resources/views/produtos/index.blade.php ENDPATH**/ ?>