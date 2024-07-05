<?php $__env->startSection('title'); ?>
    <title>Product details | GSP - The best place to explore your favourite business.</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom_head'); ?>
    <!-- Custom styles for this template -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid container-lg product-details my-5">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-decoration-none">
                            <small class="fw-semibold text-muted">Home</small>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home')); ?>/product" class="text-decoration-none">
                            <small class="fw-semibold text-muted">Product</small>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <small class="fw-semibold"> <?php echo e($car->title); ?></small>
                    </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class=" card mb-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div id="carouselBusinessList_1" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner rounded overflow-hidden z-1 mt-4">
                                                <?php $__currentLoopData = $car_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="carousel-item active p-3">
                                                        <img src="<?php echo e(thumbnail($car_image->image)); ?>"
                                                            class="img-fluid d-block w-100 rounded"
                                                            alt="<?php echo e($car->title); ?>" title=" <?php echo e($car->title); ?>"
                                                            style="height: 300px;">
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselBusinessList_1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>

                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselBusinessList_1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 p-4">


                                        <div class="d-flex flex-column flex-md-row flex-row justify-content-between">
                                            <h2 style="color: var(--dark_blue);"> <?php echo e($car->title); ?></h2>
                                            <h4 style="color: var(--deep-orrange);">AED <?php echo e($car->original_price); ?></h4>
                                        </div>

                                        <i class="bi bi-calendar3" style="color: var(--sky-blue);">
                                            <small
                                                class="fw-semibold text-muted"><?php echo e($car->created_at->diffForHumans()); ?></small>
                                        </i>

                                        <table class="table mt-4">
                                            <tbody>
                                                <tr class="border-top">
                                                    <td scope="row" style="width: 160px;">
                                                        <small class="fw-semibold">Category</small>
                                                    </td>
                                                    <td style="width: 15px;">:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->category_title); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Sub Category</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td style="text-align: justify;">
                                                        <small class="fw-semibold"><?php echo e($car->sub_category_title); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Type</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->type); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Brand</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small
                                                            class="fw-semibold"><?php echo e($car->Brand ? $car->Brand->name : ''); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Condition</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->condition); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Part No</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->part_no); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Application</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->application); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Uses</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->uses); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Product Note</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->product_note); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Delivery Note</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->delivery_note); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Made</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->made); ?></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <small class="fw-semibold">Payment Options</small>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        <small class="fw-semibold"><?php echo e($car->payment_options); ?></small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mt-1 mb-2 fw-bolder">Description </h4>
                                </div>
                                <div class="card-body">
                                    <div><?php echo $car->general_dsc; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                

                
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/product/details.blade.php ENDPATH**/ ?>