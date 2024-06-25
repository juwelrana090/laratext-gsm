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
                                            <th>Business Price</th>
                                            <th>Business Type</th>
                                            <th>Category</th>
                                            <th>Business hours</th>
                                            <th>Featured</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="product-category"><?php echo e($business->company_name); ?></td>
                                                <td class="product-category"><?php echo e($business->company_mobile); ?></td>
                                                <td class="product-category"><?php echo e($business->company_email); ?></td>
                                                <td class="product-category"><?php echo e($business->business_price); ?></td>
                                                <td class="product-category"><?php echo e($business->business_type); ?></td>
                                                <td class="product-category"><?php echo e($business->business_category_title); ?></td>
                                                <td class="product-category">
                                                    <?php $business_hours = json_decode($business->business_hours); ?>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Sunday : <?php echo e($business_hours->sunday_hours); ?>

                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Monday : <?php echo e($business_hours->monday_hours); ?>

                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Tuesday : <?php echo e($business_hours->tuesday_hours); ?>

                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Wednesday : <?php echo e($business_hours->wednesday_hours); ?>

                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Thursday : <?php echo e($business_hours->thursday_hours); ?>

                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Friday : <?php echo e($business_hours->friday_hours); ?>

                                                        </small>
                                                    </p>
                                                    <p>
                                                        <small class="fw-semibold">
                                                            Saturday : <?php echo e($business_hours->saturday_hours); ?>

                                                        </small>
                                                    </p>
                                                </td>
                                                <td class="product-category text-capitalize">
                                                    <?php echo e($business->is_featured ? 'Yes' : 'No'); ?>

                                                </td>
                                                <td class="product-category text-capitalize"><?php echo e($business->status); ?></td>
                                                <td class="d-flex justify-content-cente gap-3" style="gap: 5px">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-secondary dropdown-toggle"
                                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Status
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('business.status_update', $business->id)); ?>?status=active">Active</a>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('business.status_update', $business->id)); ?>?status=pending">Pending</a>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('business.status_update', $business->id)); ?>?status=inactive">Inactive</a>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('business.status_update', $business->id)); ?>?status=rejected">Rejected</a>
                                                        </div>
                                                    </div>
                                                    <a href="<?php echo e(route('business.edit', $business->id)); ?>"
                                                        class="btn btn-sm btn-primary text-white">edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger text-white"
                                                        data-toggle="modal"
                                                        data-target="#typeDelete<?php echo e($business->id); ?>">x</a>
                                                    <div class="modal fade" id="typeDelete<?php echo e($business->id); ?>"
                                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                        Type</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are You Sure You want to delete
                                                                    <?php echo e($business->post_title); ?>

                                                                    Type?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <a onclick="event.preventDefault();
                                                                  document.getElementById('delete-form-<?php echo e($business->id); ?>').submit();"
                                                                        href="<?php echo e(route('business.destroy', $business->id)); ?>"
                                                                        class="btn btn-danger text-white"
                                                                        data-toggle="modal"
                                                                        data-target="#colorDelete">Delete</a>
                                                                    <form id="delete-form-<?php echo e($business->id); ?>"
                                                                        action="<?php echo e(route('business.destroy', $business->id)); ?>"
                                                                        method="POST" class="d-none">
                                                                        <?php echo method_field('DELETE'); ?>
                                                                        <?php echo csrf_field(); ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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