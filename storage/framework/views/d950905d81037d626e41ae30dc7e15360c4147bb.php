<?php $__env->startSection('title'); ?>
    <title>Product List| GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid container-lg product my-5">
            <div class="row row-cols-1 g-4">

                <div class="col-sm-12 col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Product Category
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <div class="list-group w-100">
                                <?php $__currentLoopData = $car_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="list-group-item list-group-item-action"
                                        href="<?php echo e(route('product.list.category', $item->id)); ?>">
                                        <?php echo e($item->name); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-9">
                    <div class="row row-cols-1"></div>
                    <?php if($cars): ?>
                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col mb-2">
                                <div class="card product-list border-0" style="background-color: #cfcfcf4f">
                                    <div class="row g-0">
                                        <div class="col-md-4 p-2">
                                            <div class="img-container rounded">
                                                <?php if($car->CarImage->count() > 0): ?>
                                                    <img src="<?php echo e(thumbnail($car->CarImage[0]->image)); ?>"
                                                        class="img-fluid rounded d-block m-auto" alt="<?php echo e($car->title); ?>"
                                                        title="<?php echo e($car->title); ?>" style="width: auto; height: 235px;">
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div>
                                                    <small class="badge fw-semibold rounded-5"
                                                        style="background-color: var(--sky-blue);">Featured</small>
                                                    <small class="badge fw-semibold rounded-5"
                                                        style="background-color: var(--deep-orrange);">HistoryCheck</small>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-sm-12 col-md-8">
                                                        <a href="<?php echo e(route('home')); ?>/product/<?php echo e($car->slug); ?>"
                                                            class="nav-link">
                                                            <h5 class="card-title mt-1 mb-2 fw-bolder"
                                                                style="color: #0d293d;">
                                                                <?php echo e($car->title); ?>

                                                            </h5>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <h6 class="card-subtitle text-muted text-sm-start text-md-end">
                                                            <small style="color: var(--sky-blue);">AED
                                                                <?php echo e($car->original_price); ?></small>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-md-1 row-cols-md-2 g-sm-0 g-md-2 g-lg-4 mb-3">
                                                    <div class="col">
                                                        <ol class="list-group list-group-flush">
                                                            <li class="list-group-item d-flex justify-content-between align-items-start border-top px-1"
                                                                style="background-color: #ffffff00 !important;">
                                                                <small class="fw-semibold">Brand:</small>
                                                                <small
                                                                    class="fw-semibold"><?php echo e($car->Brand ? $car->Brand->name : ''); ?></small>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start px-1"
                                                                style="background-color: #ffffff00 !important;">
                                                                <small class="fw-semibold">Category:</small>
                                                                <small
                                                                    class="fw-semibold"><?php echo e($car->category_title); ?></small>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start border-bottom px-1"
                                                                style="background-color: #ffffff00 !important;">
                                                                <small class="fw-semibold">Sub Category:</small>
                                                                <small
                                                                    class="fw-semibold"><?php echo e($car->sub_category_title); ?></small>
                                                            </li>
                                                        </ol>
                                                    </div>

                                                    <div class="col">
                                                        <ol class="list-group list-group-flush">
                                                            <li class="list-group-item d-flex justify-content-between align-items-start border-top px-1"
                                                                style="background-color: #ffffff00 !important;">
                                                                <small class="fw-semibold">Part No:</small>
                                                                <small class="fw-semibold"><?php echo e($car->part_no); ?></small>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start px-1"
                                                                style="background-color: #ffffff00 !important;">
                                                                <small class="fw-semibold">Type:</small>
                                                                <small class="fw-semibold"><?php echo e($car->type); ?></small>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start border-bottom px-1"
                                                                style="background-color: #ffffff00 !important;">
                                                                <small class="fw-semibold">Condition:</small>
                                                                <small class="fw-semibold"><?php echo e($car->condition); ?></small>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>


                                                <div class="row g-2">
                                                    <div class="col-sm-12 col-md-8 col-lg-9 text-truncate">
                                                        <i class="bi bi-geo-alt-fill" style="color: var(--sky-blue);">
                                                            <small
                                                                class="fw-semibold text-muted"><?php echo e($car->pub_place); ?></small>
                                                        </i>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 text-sm-start text-md-end">
                                                        <i class="bi bi-calendar3" style="color: var(--sky-blue);">
                                                            <small
                                                                class="fw-semibold text-muted"><?php echo e($car->created_at->diffForHumans()); ?></small>
                                                        </i>
                                                    </div>
                                                </div>

                                                <a href="<?php echo e(route('home')); ?>/product/<?php echo e($car->slug); ?>"
                                                    class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-12 mb-5">
                    <?php echo e($cars->links()); ?>

                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/product/category/category_view.blade.php ENDPATH**/ ?>