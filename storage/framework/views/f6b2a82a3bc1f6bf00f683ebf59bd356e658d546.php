<?php $__env->startSection('title'); ?>
    <title>Expert List| GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid container-lg expert my-5">
            <div class="row row-cols-1 g-4">

                <?php $__currentLoopData = $experts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div class="card expert-list border-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <div class="img-container rounded">
                                        <img src="<?php echo e(asset($expert->expert_image)); ?>" class="img-fluid rounded d-block m-auto"
                                            alt="<?php echo e($expert->title); ?>" title="<?php echo e($expert->title); ?>" style="width: auto; height: 235px;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-subtitle text-muted"><small>Real State Agent</small></h6>
                                        <h5 class="card-title mt-1 mb-2 fw-bolder" style="color: #0d293d;"><?php echo e($expert->contact_person_name); ?></h5>

                                        <div class="social-media-link">
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-twitter-x"></i>
                                            </a>
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-pinterest"></i>
                                            </a>
                                            <a href="http://" class="icon-link me-1 fs-5" target="_blank">
                                                <i class="bi bi-telegram"></i>
                                            </a>
                                        </div>


                                        <div class="row row-cols-1 row-cols-md-2 my-3 info">
                                            <div class="col">
                                                <div class="border-top border-bottom py-2 fw-semibold"
                                                    style="font-size: small;">
                                                    <span>Office: </span>
                                                    <a href="tel:<?php echo e($expert->telephone); ?>" class="text-decoration-none float-end"><?php echo e($expert->telephone); ?></a>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="border-top border-bottom py-2 fw-semibold"
                                                    style="font-size: small;">
                                                    <span>Email: </span>
                                                    <a href="mailto:"
                                                        class="text-decoration-none  float-end"><?php echo e($expert->email); ?></a>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                                                    <span>Mobile: </span>
                                                    <a href="tel:<?php echo e($expert->mobile); ?>" class="text-decoration-none float-end"><?php echo e($expert->mobile); ?></a>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="border-bottom py-2 fw-semibold" style="font-size: small;">
                                                    <span>Website: </span>
                                                    <a href="<?php echo e($expert->website); ?>"
                                                        class="text-decoration-none  float-end"><?php echo e($expert->website); ?></a>
                                                </div>
                                            </div>
                                        </div>


                                        <div>
                                            <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 message-btn fw-semibold me-md-2 border-0"
                                                href="#" role="button">
                                                <i class="bi bi-envelope"></i>
                                                <small>Message</small>
                                            </a>

                                            <a class="btn btn-primary rounded-5 py-1 px-2 px-md-4 whatsapp-btn fw-semibold border-0"
                                                href="#" role="button">
                                                <i class="bi bi-whatsapp"></i>
                                                <small>Whatsapp</small>
                                            </a>

                                            <a class="btn rounded-5 float-end py-1 px-2 px-md-4 profile-btn fw-semibold border-0"
                                                href="<?php echo e(route('expert.details', $expert->slug)); ?>" role="button">
                                                <small>View Profile</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/expert/index.blade.php ENDPATH**/ ?>