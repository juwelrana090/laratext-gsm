<?php $__env->startSection('title', 'Banner'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('theme_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_css'); ?>
    <style>
        .brand {
            margin-right: 20px;
            cursor: pointer;
            width: 100px;
            height: 80px;
            display: flex;
            color: black;
            align-items: center;
            flex-direction: column;
            border-radius: 5px;
            justify-content: center;
            border: 1px solid rgb(252, 228, 228);
            margin-bottom: 20px;
            box-shadow: rgb(0 0 0 / 8%) 0px 0px 15px -3px, rgb(0 0 0 / 4%) 0px 4px 6px -2px !important;
        }

        .brandIcon {
            height: 40px;
            padding: 5px;
        }

        .brandIcon img {
            width: 100%;
            height: 40px;
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
                    <h4 class="card-title">Banner Setting</h4>
                </div>

                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <img src="<?php echo e(asset($banner->banner_image)); ?>" alt="<?php echo e($banner->banner_title); ?>">
                            </div>
                            <div class="col-12">
                                <form action="<?php echo e(route('banner.update')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($banner->id); ?>">

                                    <div class="form-group">
                                        <label for="banner_title">Banner Title</label>
                                        <input type="text" id="banner_title" class="form-control" name="banner_title"
                                            value="<?php echo e($banner->banner_title); ?>" placeholder="Banner Title" />
                                    </div>

                                    <div class="form-group">
                                        <label for="banner_image">Banner Image</label>
                                        <input type="file" id="banner_image" class="form-control" name="banner_image">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>

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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/banner/index.blade.php ENDPATH**/ ?>