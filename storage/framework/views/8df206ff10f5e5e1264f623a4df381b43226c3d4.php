

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><?php echo e(__($pessoa->nome)); ?></h1>
                </div>
                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <p><strong>ID: </strong><?php echo e($pessoa->id); ?></p>
                        <p><strong>Nome: </strong><?php echo e($pessoa->nome); ?></p>
                        <p><strong>Data de nascimento: </strong><?php echo e(date('d/m/Y',strtotime($pessoa->dtaNasc))); ?></p>
                        <p><strong>Cadastrado em: </strong><?php echo e(date('d/m/Y',strtotime($pessoa->created_at))); ?></p>
                        <p><strong>Idade: </strong><?php echo e($pessoa->idade); ?> anos</p>

                    </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col d-flex justify-content-center mt-2">
                            <a href="<?php echo e(route('pessoa.edit',['pessoa' => $pessoa->id])); ?>">Editar</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="<?php echo e(route('pessoa.index')); ?>"  class="nav-link">Listar Usuarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RepositoriosGitHub\PHP\PHPSystem\LeilaoPhp\leilao\resources\views/Pessoa\showPessoa.blade.php ENDPATH**/ ?>