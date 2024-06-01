<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('theme_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About Us Page</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <form action="<?php echo e(route('admin.frontend.about_us.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mt-1">
                                <label for="exampleFormControlSelect1" class="font-weight-bold">About Us Content</label>
                                <textarea name="general_dsc" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="6">
                                <?php if(pages()->page_name=='about-us'): ?>
                                    <?php echo pages()->page_content; ?>

                                <?php endif; ?>
                            </textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('theme_js'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_js'); ?>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\frontendSettings\about_us.blade.php ENDPATH**/ ?>