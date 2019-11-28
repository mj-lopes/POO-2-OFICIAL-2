<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <h4 class="col-md-6">
                            Nova Questão
                        </h4>                        
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                
                    <h1> Cadastrar Questão</h1>
            
                    <form method="POST" action="<?php echo e(route('salvarQuestao')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Coeficiente A</label>
                                <input type="text" name="coef_a" class="form-control" id="exampleInputEmail1">                            
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Coeficiente B</label>
                                <input type="text" name="coef_b" class="form-control" d="exampleFormControlTextarea1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Coeficiente C</label>
                                <input type="text" name="coef_c" class="form-control" d="exampleFormControlTextarea1" >
                            </div>                                                  
                            
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

            


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Desktop\Nova pasta\bhaskara\resources\views/create.blade.php ENDPATH**/ ?>