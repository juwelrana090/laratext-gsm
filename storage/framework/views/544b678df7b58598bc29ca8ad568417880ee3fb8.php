<?php $__env->startSection('title'); ?>
    <title>Expert category| GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>


        <div class="container-fluid container-lg mt-5 mb-3">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <img src="<?php echo e(asset($banner->banner_image)); ?>" class="img-fluid" alt="<?php echo e($banner->banner_title); ?>">
                </div>
            </div>
        </div>

        <div class="container-fluid container-lg mt-5 mb-2">

            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Expert Category
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <div class="list-group w-100">
                                <?php $__currentLoopData = $experts_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="list-group-item list-group-item-action"
                                        href="<?php echo e(route('expert.list.category', $item->category_slug)); ?>">
                                        <?php echo e($item->category_name); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <div class="card category-card border-0">
                        <div class="card-body p-0 mb-3">
                            <!-- <img src="<?php echo e(asset('images/maintenance.png')); ?>" alt="" title="" style="width: 50px; height: 50px" /> -->
                            <!-- <span class="fw-semibold ms-2" style="font-size: 1.2rem">Business Listing</span> -->
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold py-2 px-3 rounded-3" style="font-size: 1.2rem;">Expert
                                    Category</span>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2 row-cols-md-4 g-3">
                        <?php $__currentLoopData = $experts_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <div class="card category-list-card border- py-2" style="width: 100%">
                                    <img class="card-img-top d-block m-auto" src="<?php echo e(asset($item->category_image)); ?>"
                                        alt="<?php echo e($item->category_name); ?>" title="<?php echo e($item->category_name); ?>"
                                        style="width: 3rem; height: 3rem" />
                                    <div class="card-body text-truncate py-2">
                                        <h6 class="card-title fw-semibold text-center my-0" style="font-size: 1rem">
                                            <?php echo e($item->category_name); ?></h6>
                                        <a href="<?php echo e(route('expert.list.category', $item->category_slug)); ?>"
                                            class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>


    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/expert/category.blade.php ENDPATH**/ ?>