
<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('stock_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12 mt-2">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.stock.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Stock">
                <thead>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.stock.fields.asset')); ?>

                        </th>
                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                            <th>
                                Hospital
                            </th>
                        <?php endif; ?>
                        <th>
                            <?php echo e(trans('cruds.stock.fields.current_stock')); ?>

                        </th>
                        <?php if (\Illuminate\Support\Facades\Blade::check('user')): ?>
                            <th>
                                Add Stock
                            </th>
                            <th>
                                Remove Stock
                            </th>
                        <?php endif; ?>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($stock->asset->name ?? ''); ?>

                            </td>
                            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                <td>
                                    <?php echo e($stock->team->name); ?>

                                </td>
                            <?php endif; ?>
                            <td>
                                <?php echo e($stock->current_stock ?? ''); ?>

                            </td>
                            <?php if (\Illuminate\Support\Facades\Blade::check('user')): ?>
                                <td>
                                    <form action="<?php echo e(route('admin.transactions.storeStock', $stock->id)); ?>" method="POST" style="display: inline-block;" class="form-inline">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="action" value="add">
                                        <input type="number" name="stock" class="form-control form-control-sm col-4" min="1">
                                        <input type="submit" class="btn btn-xs btn-danger" value="ADD">
                                    </form>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('admin.transactions.storeStock', $stock->id)); ?>" method="POST" style="display: inline-block;" class="form-inline">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="action" value="remove">
                                        <input type="number" name="stock" class="form-control form-control-sm col-4" min="1">
                                        <input type="submit" class="btn btn-xs btn-danger" value="REMOVE">
                                    </form>
                                </td>
                            <?php endif; ?>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('stock_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.stocks.show', $stock->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
      columnDefs: [{
          orderable: true,
          className: '',
          targets: 0
      }]
  });
  $('.datatable-Stock:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-Asset-Stock-Management\resources\views/admin/stocks/index.blade.php ENDPATH**/ ?>