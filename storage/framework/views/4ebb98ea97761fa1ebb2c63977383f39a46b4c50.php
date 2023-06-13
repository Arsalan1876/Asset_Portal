
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.stock.title')); ?>

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.stocks.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.stock.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($stock->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.stock.fields.asset')); ?>

                        </th>
                        <td>
                            <?php echo e($stock->asset->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.stock.fields.current_stock')); ?>

                        </th>
                        <td>
                            <?php echo e($stock->current_stock); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <h4 class="text-center">
                History of <?php echo e($stock->asset->name); ?>

                <?php if(count($stock->asset->transactions) == 0): ?>
                    is empty
                <?php endif; ?>
            </h4>
            <?php if(count($stock->asset->transactions) > 0): ?>
                <table class="table table-sm table-bordered table-striped col-6 m-auto">
                    <thead>
                        <tr>
                            <th class="w-75">User</th>
                            <th>Amount</th>
                        </tr>
                        <?php $__currentLoopData = $stock->asset->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($transaction->user->name); ?>

                                    (<?php echo e($transaction->user->email); ?>)
                                    (<?php echo e($transaction->user->team->name); ?>)
                                </td>
                                <td><?php echo e($transaction->stock); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </thead>
                </table>
            <?php endif; ?>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo e(route('admin.stocks.index')); ?>">
                    <?php echo e(trans('global.back_to_list')); ?>

                </a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-Asset-Stock-Management\resources\views/admin/stocks/show.blade.php ENDPATH**/ ?>