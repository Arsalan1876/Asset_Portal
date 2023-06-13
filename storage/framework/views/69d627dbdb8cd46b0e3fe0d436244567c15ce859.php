<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        <?php echo e(trans('cruds.userManagement.title')); ?>

                    </a>
                    <ul class="nav-dropdown-items">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.permission.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.role.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.user.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('team_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.teams.index")); ?>" class="nav-link <?php echo e(request()->is('admin/teams') || request()->is('admin/teams/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-users nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.team.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asset_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.assets.index")); ?>" class="nav-link <?php echo e(request()->is('admin/assets') || request()->is('admin/assets/*') ? 'active' : ''); ?>">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        <?php echo e(trans('cruds.asset.title')); ?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('stock_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.stocks.index")); ?>" class="nav-link <?php echo e(request()->is('admin/stocks') || request()->is('admin/stocks/*') ? 'active' : ''); ?>">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        <?php echo e(trans('cruds.stock.title')); ?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.transactions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/transactions') || request()->is('admin/transactions/*') ? 'active' : ''); ?>">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        <?php echo e(trans('cruds.transaction.title')); ?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : ''); ?>" href="<?php echo e(route('profile.password.edit')); ?>">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            <?php echo e(trans('global.change_password')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel-Asset-Stock-Management\resources\views/partials/menu.blade.php ENDPATH**/ ?>