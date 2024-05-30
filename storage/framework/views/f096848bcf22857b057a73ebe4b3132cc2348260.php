<?php $__env->startSection('title', 'Businesses List'); ?>
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
            height: 100px;
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
                    <h4 class="card-title">Businesses List</h4>

                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 pl-0">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th>Company name</th>
                                            <th>Company mobile</th>
                                            <th>Company email</th>
                                            <th>Business Type</th>
                                            <th>Category</th>
                                            <th>Business hours</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="product-category"><?php echo e($business->company_name); ?></td>
                                                <td class="product-category"><?php echo e($business->company_mobile); ?></td>
                                                <td class="product-category"><?php echo e($business->company_email); ?></td>
                                                <td class="product-category"><?php echo e($business->business_type); ?></td>
                                                <td class="product-category"><?php echo e($business->business_category_title); ?></td>
                                                <td class="product-category"><?php echo e($business->business_hours); ?></td>
                                                <td class="product-category"></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-12 mb-5">
                                <!-- Pagination Links -->
                                <?php echo e($businesses->links()); ?>

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

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/business/business.blade.php ENDPATH**/ ?>