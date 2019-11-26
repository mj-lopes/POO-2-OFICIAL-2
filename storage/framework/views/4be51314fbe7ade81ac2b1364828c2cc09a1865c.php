<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row"> 
                        <h4 class="col-md-6">
                            Listagem
                        </h4>
                        <div class="text-right col-md-6">
                            <a href="<?php echo e(route('novaQuestao')); ?>">Nova questao</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                
        <h1> Listagem de questões</h1>
      
        <table class = "table">
            <thead class = "thead-dark">
                <tr>
                    <th>Questão</th>
                    <th>Delta</th>
                    <th>Valor de X1</th>
                    <th>Valor de x2</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $questoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           
            <tr> 
                <td><?php echo e($questao->question); ?></td>
                <td><?php echo e($questao->delta); ?></td>
                <td><?php echo e($questao->x1); ?></td>
                <td><?php echo e($questao->x2); ?></td>           
            </tr>                  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </tbody>  
        </table>  
    </div>
    </div>
    </div>
    </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aluno09\Documents\Prova POO\bhaskaraOficial\resources\views/index.blade.php ENDPATH**/ ?>