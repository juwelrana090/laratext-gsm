<div class="topAppBar">
    <div class="humberMenu">
        <i class="fas fa-bars"></i>
    </div>
    <a href="<?php echo e(url('/')); ?>">
        <div class="MobileLogo">
            <img src="<?php echo e(asset('image/logo.jpeg')); ?>" alt="">&nbsp;
            
        </div>
    </a>
    <div class="rightTopIcon"></div>
</div>
<div class="mobile_menu_sidebar">
    <div class="mobile_menu_sidebar_wrapper">
        <div class="mobile_sidebar_close">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a class="side_menu_active" href="<?php echo e(url('/')); ?>">Home</a></li>
            <li>
                <a href="#">Products &nbsp;<i class="fas fa-caret-down"></i></a>
                <ul class="mobile_submneu">
                    <?php $__currentLoopData = CarTypes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('car.search.by.car_type_id', $menu->id)); ?>"><?php echo e($menu->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            

            <li><a href="<?php echo e(route('bestcool.brands')); ?>">Brands</a></li>
            <li><a href="<?php echo e(route('about_us')); ?>">About Us</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
        </ul>
    </div>
</div>
<div class="space50"></div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\frontend-dd\mobile\parts\app_bar.blade.php ENDPATH**/ ?>