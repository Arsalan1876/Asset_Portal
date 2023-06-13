
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.transaction.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Transaction">
                <thead>
                    <tr>
                        <th>
                            Created at
                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.asset')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.user')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.transaction.fields.stock')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($transaction->id); ?>">
                            <td>
                                <?php echo e($transaction->created_at); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->asset->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->user->name ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($transaction->stock ?? ''); ?>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 0, 'desc' ]],
    pageLength: 100,
      columnDefs: [{
          orderable: true,
          className: '',
          targets: 0
      }]
  });
  $('.datatable-Transaction:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-Asset-Stock-Management\resources\views/admin/transactions/index.blade.php ENDPATH**/ ?>