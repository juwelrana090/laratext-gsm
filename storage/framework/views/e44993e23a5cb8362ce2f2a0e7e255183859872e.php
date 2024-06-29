<?php $__env->startSection('title', 'Product List'); ?>
<?php $__env->startPush('meta'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('theme_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_css'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_css'); ?>
    <style>
        .bg_image {
            width: 100%;
            position: relative;
        }

        .conditional_image {
            position: absolute;
            top: 0;
            left: 0%;
            margin: 0 auto;
            width: 100% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dbdbdbb0;
        }

        .conditional_image img {
            width: 75px;
            height:100px;
            object-fit: contain;
            filter: contrast(120%);
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product List</h4>
                    
                    <h4 class="card-title">Total Product: <?php echo e(count($cars)); ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 pl-0">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th >Image</th>
                                            <th >Title</th>
                                            <th >Year</th>
                                            <th >Menufacturer Brands</th>
                                            <th >Vehicle Brands</th>
                                            <th >Category</th>
                                            <th >Part No</th>
                                            <th >Origin</th>
                                            <th >Application</th>
                                            <th >ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="product-img" >
                                                    <?php if(!empty($car->CarImage[0])): ?>
                                                        <?php if($car->pub_place == 'Sold'): ?>
                                                        <div class="bg_image">
                                                            <img src="<?php echo e(thumbnail($car->CarImage[0]->image)); ?>"
                                                                alt="Img placeholder" style="width:100px;height:75px" >
                                                            <div class="conditional_image">
                                                                <img src="<?php echo e(asset('image/sold.png')); ?>" style="width:100px;height:75px"  alt="" srcset="">
                                                            </div>
                                                        </div>
                                                        <?php elseif($car->pub_place == 'Reserved'): ?>
                                                             <div class="bg_image">
                                                                <img src="<?php echo e(thumbnail($car->CarImage[0]->image)); ?>"
                                                                    alt="Img placeholder" style="width:100px;height:75px">
                                                                <div class="conditional_image">
                                                                    <img src="<?php echo e(asset('image/reserved.png')); ?>" style="width:100px;height:75px"  alt="" srcset="">
                                                                </div>
                                                            </div>
                                                        <?php else: ?>
                                                            <img src="<?php echo e(thumbnail($car->CarImage[0]->image)); ?>"
                                                                alt="Img placeholder" style="width:100px">
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                </td>
                                                <td class="product-name">
                                                    <p> <?php echo e($car->title); ?></p>
                                                    
                                                </td>
                                                <td class="product-category"><?php echo e($car->year); ?></td>
                                                <td class="product-category"><?php echo e($car->Brand?$car->Brand->name:''); ?></td>
                                                <td class="product-category"><?php echo e($car->FuelType?$car->FuelType->name:''); ?></td>
                                                <td class="product-category"><?php echo e($car->CarType?$car->CarType->name:''); ?></td>
                                                <td class="product-category"><?php echo e($car->part_no); ?></td>
                                                <td class="product-category"><?php echo e($car->origin); ?></td>
                                                <td class="product-category"><?php echo e($car->voltage); ?></td>
                                                <td class="product-action d-flex align-items-center">
                                                    <a href="<?php echo e(route('admin.cars.edit',$car->id)); ?>">
                                                        <span class="action-edit btn-sm btn-primary"><i
                                                            class="feather icon-edit"></i></span>
                                                    </a>
                                                    <span class="action-delete btn-sm btn-danger" style="margin: 8px 0;cursor: pointer;" data-toggle="modal"  data-target="#carDelete<?php echo e($car->id); ?>"><i
                                                            class="feather icon-trash"></i></span>
                                                    <span class="action-delete btn-sm btn-success"><i
                                                            class="feather icon-eye"></i></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    <a href="<?php echo e(route('assign_showing_place',[$car->id,'new_arrivals'])); ?>" class="btn btn-sm btn-primary">
                                                    <?php if($car->pub_place == 'new_arrivals'): ?> <i class="feather icon-check-square"></i> <?php else: ?> <?php endif; ?> New Arrivals</a>
                                                    <a href="<?php echo e(route('assign_showing_place',[$car->id,'best_selling'])); ?>" class="btn btn-sm btn-success">
                                                        <?php if($car->pub_place == 'best_selling'): ?> <i class="feather icon-check-square"></i> <?php else: ?> <?php endif; ?>
                                                        Best Selling</a>
                                                        <?php if($car->pub_place == 'Sold'): ?>
                                                            <a href="<?php echo e(route('assign_showing_place',[$car->id,'Unsold'])); ?>" class="btn btn-sm btn-danger">
                                                                 <i class="feather icon-check-square"></i> Unsold
                                                            </a>
                                                            <?php else: ?>
                                                            <a href="<?php echo e(route('assign_showing_place',[$car->id,'Sold'])); ?>" class="btn btn-sm btn-danger">
                                                                Sold
                                                            </a>
                                                        <?php endif; ?>
                                                        <?php if($car->pub_place == 'Reserved'): ?>
                                                            <a href="<?php echo e(route('assign_showing_place',[$car->id,'Unreserved'])); ?>" class="btn btn-sm btn-warning">
                                                                 <i class="feather icon-check-square"></i>Unreserved

                                                            </a>
                                                        <?php else: ?>
                                                         <a href="<?php echo e(route('assign_showing_place',[$car->id,'Reserved'])); ?>" class="btn btn-sm btn-warning">
                                                             Reserved
                                                        </a>
                                                        <?php endif; ?>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="carDelete<?php echo e($car->id); ?>" tabindex="-1" aria-labelledby="myModalLabel6" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are You Sure You want to delete?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a onclick="event.preventDefault();
                                                      document.getElementById('delete-form-<?php echo e($car->id); ?>').submit();"
                                                                href="<?php echo e(route('admin.cars.destroy', $car->id)); ?>"
                                                                class="btn btn-danger text-white" data-toggle="modal"
                                                                data-target="#colorDelete">Delete</a>
                                                            <form id="delete-form-<?php echo e($car->id); ?>"
                                                                action="<?php echo e(route('admin.cars.destroy', $car->id)); ?>" method="POST"
                                                                class="d-none">
                                                                <?php echo method_field('DELETE'); ?>
                                                                <?php echo csrf_field(); ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-12 mb-5">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('theme_js'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_js'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_js'); ?>
    <script>
        var dataThumbView = $(".data-thumb-view").DataTable({
            responsive: false,
            columnDefs: [{
                orderable: true,
                targets: 0,
            }],
            dom: '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
            oLanguage: {
                sLengthMenu: "_MENU_",
                sSearch: ""
            },
            aLengthMenu: [
                [4, 10, 15, 20],
                [4, 10, 15, 20]
            ],
            select: {
                style: "multi"
            },
            order: [
                [1, "asc"]
            ],
            bInfo: false,
            pageLength: 4,
            buttons: [

            ],
            initComplete: function(settings, json) {
                $(".dt-buttons .btn").removeClass("btn-secondary")
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/car/list.blade.php ENDPATH**/ ?>