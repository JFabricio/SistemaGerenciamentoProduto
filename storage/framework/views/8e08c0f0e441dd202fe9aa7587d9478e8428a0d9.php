<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title class="">SGP-Home</title>

    <!--Bootstrap-->
    <link href="css/app.css" rel="stylesheet" media="screen">
    

</head>
<body>


<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="jumbotron" style="margin-top:10%;">
            <h1 class="display-4">SGP</h1>
            <p class="lead">Sistema de Gerenciamento de Produto</p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="<?php echo e(route('login')); ?>" role="button">Começar</a>
            </p>
        </div>
    </div>
        
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/SGProdutos/resources/views/produto/index.blade.php ENDPATH**/ ?>