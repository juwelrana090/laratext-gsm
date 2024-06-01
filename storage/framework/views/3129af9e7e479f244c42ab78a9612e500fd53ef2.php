<?php $__env->startSection('title', 'Role'); ?>
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
        <div class="col-lg-4 col-md-12">
            <div class="card" style="background-color: #fde4e477">
                <div class="card-header">
                    <h4 class="card-title">Edit Brand</h4>
                    <div class="brand">
                        <div class="brandIcon">
                            <img id="imagePreview" src="<?php echo e(asset($brand->image)); ?>" alt="" srcset="">
                        </div>
                        <div class="brandName">
                            <p><?php echo e($brand->name); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="<?php echo e(route('admin.brands.update', $brand->id)); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Brand Name</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($brand->name); ?>" name="name"
                                            placeholder="Brand Name">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <span><?php echo e($message); ?></span>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Brand Logo(<span class="text-danger">make sure this
                                                logo is png format and less than 100 kb</span>)</label>
                                        <input type="file" id="first-name-vertical"
                                            onchange="document.getElementById('imagePreview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image">
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <span><?php echo e($message); ?></span>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="brnad_description">Brand Description</label>
                                        <textarea name="brnad_description" class="form-control" id="brnad_description" rows="3"><?php echo e($brand->brnad_description); ?></textarea>
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

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\brands\edit.blade.php ENDPATH**/ ?>