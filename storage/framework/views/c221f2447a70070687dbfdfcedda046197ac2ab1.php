<footer>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3">
                <h4 class="footer-block-header">Products</h4>
                <ul id="footer-company" class="box">
                    <?php $__currentLoopData = CarTypes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="footer-links" data-tr-event-name="footer_about_us" href="<?php echo e(route('car.search.by.car_type_id',$menu->id)); ?>"><?php echo e($menu->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>
            
            <div class="col-lg-3">
                <h4 class="footer-block-header">Get Social</h4>
                <ul id="footer-company" class="box">
                    <li><a class="footer-links" target="_blank" href="<?php echo e(social_link()->fb); ?>">Facebook</a>
                    </li>
                    <li><a class="footer-links" target="_blank" href="<?php echo e(social_link()->twitter); ?>">Twitter</a></li>
                    <li><a class="footer-links" target="_blank" href="<?php echo e(social_link()->youtube); ?>">Youtube</a></li>
                    <li><a class="footer-links" target="_blank" href="<?php echo e(social_link()->instagram); ?>">Instagram</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="footer-block-header">Company</h4>
                <ul id="footer-company" class="box">
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="<?php echo e(route('contact')); ?>">Help</a>
                    </li>
                    <li><a class="footer-links" data-tr-event-name="footer_about_us" href="<?php echo e(route('about_us')); ?>">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4 class="footer-block-header">Address</h4>
                <ul id="footer-company" class="box">
                   <p class="text-white">Tel: <?php echo e(sharjah_address()?sharjah_address()->tel:''); ?></p>
                   <p class="text-white">Mobile: <?php echo e(sharjah_address()?sharjah_address()->mobile:''); ?></p>
                   <p class="text-white">Address: <?php echo e(sharjah_address()?sharjah_address()->address:''); ?></p>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright mt-5 text-white text-center">
        <p>© COPYRIGHT <?php echo e(date('Y')); ?> <a href="https://bestcoolautoac.com/">DYNE BEST COOL</a></p>
    </div>
</footer>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\layouts\frontend-dd\desktop\parts\footer.blade.php ENDPATH**/ ?>