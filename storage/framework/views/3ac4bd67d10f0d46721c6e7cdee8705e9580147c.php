<title class="">Editar</title>
<?php $__env->startSection('content'); ?>

<div class="container jumbotron">
<h1>Cadastro de Novo Produto</h1><br/>
    <div class="col-md-8">
    <form action="<?php echo e(route('produtos.update',['produto'=> $produto->id])); ?>" class="form-horizontal" method="POST"> <!--Chama a rota que foi definida para todos controlermodelo-->
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
        <div class="row col-md-4">
            <label >Codigo Produto</label>
            <input type="text" class="form-control" name="codigo" maxlength="10px" value="<?php echo e(old('produto',$produto->codigo)); ?>">
        </div>
        <br />
        <div class="row col-md-6" style="margin-left:33%;margin-top:-13%;">
            <label >Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo e(old('produto',$produto->nome)); ?>">
        </div>
        <br />
        <div class="row col-md-6">
            <label >Marcar</label>
            <input type="text" class="form-control" name="marca" value="<?php echo e(old('produto',$produto->marca)); ?>">
        </div>
        <br />
        <div class="row col-md-4" style="margin-left:50%;margin-top:-13%;" >
            <label >Valor</label>
            <input type="text" class="form-control" name="valor" value="<?php echo e(old('produto',$produto->valor)); ?>">
        </div>
        <br />
        <div class="row col-md-4">
            <label >Data Entrada</label>
            <input type="date" class="form-control" name="data_entrada" value="<?php echo e(old('produto',$produto->data_entrada)); ?>">
        </div>
        <br />
        <div class="row col-md-4" style="margin-left:33%;margin-top:-13%;">
            <label >Data Saida</label>
            <input type="date" class="form-control" name="data_saida" value="<?php echo e(old('produto',$produto->data_saida)); ?>">
        </div>
        <br />
        <div class="row"><button type="submit"class="btn btn-danger">Atualizar</button></div>
    </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/SGProdutos/resources/views/produtos/edit.blade.php ENDPATH**/ ?>