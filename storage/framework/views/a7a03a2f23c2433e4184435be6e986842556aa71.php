<?php $__env->startSection('content'); ?>
    <div class="col ">
        <div class='row '>
            <div class="col-md-12 ">
                <div class="card">
                    <table id="table" class="tb hover dataTable table-striped no-footer" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pessoa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($pessoas->nome); ?></td>
                                <td><?php echo e(date('d/m/Y',strtotime($pessoas->dtaNasc))); ?></td>

                                <td>
                                    <div class="row">
                                        <div>
                                            <a class="btn btn-link" href="<?php echo e(route('pessoa.show',['pessoa' => $pessoas->id])); ?>">Detalhes</a>
                                        </div>
                                        <div>
                                            <form method="POST" action="<?php echo e(route('pessoa.destroy',['pessoa'=>$pessoas->id])); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="btn btn-link">Remover</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="card-footer">
                    <a href=#  class="nav-link">Home</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RepositoriosGitHub\PHP\PHPSystem\LeilaoPhp\leilao\resources\views/Pessoa\showAllPessoa.blade.php ENDPATH**/ ?>