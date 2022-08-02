<div class="user-info">
    <img class="mb-3 show-img img-demo"
        src="
    <?php if(Auth::user()->profilepic): ?> <?php echo e(asset('profilepic/' . Auth::user()->profilepic)); ?>

    <?php else: ?>
    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?> <?php endif; ?>"
        alt="">
    <h5><a href=""> <?php echo e('@' . Auth::user()->username); ?></a></h5>
    <h4><?php echo e(Auth::user()->name); ?></h4>
</div>
<div class="user-menu">
    <ul>
        <li>
            <a class="<?php if(request()->path() == 'user/dashboard'): ?> active <?php endif; ?>" href="<?php echo e(route('user.dashboard')); ?>">
                <?php echo e(__('Profile')); ?> </a>
        </li>
        <?php if($visibility->is_shop == 1): ?>
            <li>
                <a class=" 
    <?php if(request()->path() == 'user/product-orders'): ?> active  
    <?php elseif(request()->is('user/product-order/*')): ?> active <?php endif; ?>"
                    href="<?php echo e(route('user.product.order')); ?>"> <?php echo e(__('Product Order')); ?> </a>
            </li>
        <?php endif; ?>
        <?php if($visibility->is_shop == 1): ?>
            <li>
                <a class="<?php if(request()->path() == 'user/downloadable'): ?> active <?php endif; ?>"
                    href="<?php echo e(route('user.product.downloadable')); ?>"> <?php echo e(__('Downloadable')); ?> </a>
            </li>
        <?php endif; ?>
        <li>
            <a class="<?php if(request()->path() == 'user/edit-profile'): ?> active <?php endif; ?>" href="<?php echo e(route('user.editprofile')); ?>">
                <?php echo e(__('Edite Profile')); ?> </a>
        </li>
        <li>
            <a class="<?php if(request()->path() == 'user/change-password'): ?> active <?php endif; ?>" href="<?php echo e(route('user.change_password')); ?>">
                <?php echo e(__('Change Password')); ?> </a>
        </li>
        <li>
            <a class="" href="<?php echo e(route('user.logout')); ?>"> <?php echo e(__('Logout')); ?> </a>
        </li>
    </ul>
</div>
<?php /**PATH E:\officeserver\htdocs\eshbhs\resources\views/user/dashboard-sidenav.blade.php ENDPATH**/ ?>