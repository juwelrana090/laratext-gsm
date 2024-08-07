<?php $__env->startSection('title', 'Experts List'); ?>
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
                    <h4 class="card-title">Experts List</h4>

                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 pl-0">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th>Contact Person Name</th>
                                            <th>Contact mobile</th>
                                            <th>Contact email</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $experts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="product-category"><?php echo e($expert->contact_person_name); ?></td>
                                                <td class="product-category"><?php echo e($expert->mobile); ?></td>
                                                <td class="product-category"><?php echo e($expert->email); ?></td>
                                                <td class="product-category"><?php echo e($expert->title); ?></td>
                                                <td class="product-category"><?php echo e($expert->experts_categories_name); ?></td>
                                                <td class="product-category"><?php echo e($expert->price); ?></td>
                                                <td class="product-category"><?php echo e($expert->status); ?></td>
                                                <td class="product-category">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-secondary dropdown-toggle"
                                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Status
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('experts.status_update', $expert->id)); ?>?status=active">Active</a>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('experts.status_update', $expert->id)); ?>?status=pending">Pending</a>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('experts.status_update', $expert->id)); ?>?status=inactive">Inactive</a>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('experts.status_update', $expert->id)); ?>?status=rejected">Rejected</a>
                                                        </div>
                                                    </div>
                                                    <a href="<?php echo e(route('experts.edit', $expert->id)); ?>"
                                                        class="btn btn-sm btn-primary text-white">edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger text-white"
                                                        data-toggle="modal"
                                                        data-target="#typeDelete<?php echo e($expert->id); ?>">x</a>
                                                    <div class="modal fade" id="typeDelete<?php echo e($expert->id); ?>"
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
                                                                    Are You Sure You want to delete " <?php echo e($expert->title); ?>"
                                                                    Type?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <a onclick="event.preventDefault();
                                                                  document.getElementById('delete-form-<?php echo e($expert->id); ?>').submit();"
                                                                        href="<?php echo e(route('experts.destroy', $expert->id)); ?>"
                                                                        class="btn btn-danger text-white"
                                                                        data-toggle="modal"
                                                                        data-target="#colorDelete">Delete</a>
                                                                    <form id="delete-form-<?php echo e($expert->id); ?>"
                                                                        action="<?php echo e(route('experts.destroy', $expert->id)); ?>"
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
                                <?php echo e($experts->links()); ?>

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

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/experts/experts.blade.php ENDPATH**/ ?>