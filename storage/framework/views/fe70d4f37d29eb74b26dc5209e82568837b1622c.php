<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('theme_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/assets/css/image-uploader.min.css')); ?>">
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }


        .previews_car {
            display: grid;
            grid-template-columns: auto auto auto;
        }

        .previews_car_img {
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-bottom: 10px;
            position: relative;
        }

        .previews_car_img img {
            width: 150px;
            height: 150px;
            object-fit: cover
        }

        .delete_preview_image {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 20px;
            height: 20px;
            color: #ffffff;
            background-color: rgb(255, 0, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-label {
            margin-left: 12px;
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
                    <h4 class="card-title">Update About Us Page</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <form action="<?php echo e(route('admin.frontend.about_us.update')); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php if(pages()){ ?>
                            <?php if(pages()->page_slug == 'about-us'): ?>
                                <?php
                                    $pages = pages();
                                ?>
                            <?php endif; ?>
                            <?php } ?>
                            <div class="form-group mt-1">
                                <label for="exampleFormControlSelect1" class="font-weight-bold">About Us Content</label>
                                <textarea name="general_dsc" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="6">
                                    <?php echo $pages->page_content; ?>
                                </textarea>
                            </div>


                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body" style="position: relative;">
                                        <h4 class="card-title text-uppercase">Product Images</h4>
                                        <hr>
                                        <?php
                                        $images = [];

                                        if ($pages->page_images) {
                                            $images = json_decode($pages->page_images);
                                        }
                                        ?>
                                        <div class="previews_car">
                                            <?php if($pages->page_images): ?>
                                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="previews_car_img">
                                                        <img src="<?php echo e(asset($image->image_path)); ?>" alt=""
                                                            srcset="">
                                                        <div class="delete_preview_image"><a
                                                                href="<?php echo e(route('image.delete', $image->image_id)); ?>"
                                                                class="text-white">x</a></div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                        <hr>
                                        <div class="input-images-1"></div>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <h4 class="card-title">SEO Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="meta_title" class="col-sm-12 col-form-label">SEO Title </label>
                                <div class="col-sm-12">
                                    <input type="text" name="meta_title"
                                        class="form-control <?php $__errorArgs = ['meta_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="meta_title"
                                        placeholder="SEO Title" value="<?php echo e($pages->meta_title); ?>">
                                </div>
                                <?php $__errorArgs = ['meta_title'];
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

                            <div class="form-group row">
                                <label for="meta_keywords" class="col-sm-12 col-form-label">SEO Keywords</label>
                                <div class="col-sm-12">
                                    <input type="text" name="meta_keywords"
                                        class="form-control <?php $__errorArgs = ['meta_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="meta_keywords"
                                        placeholder="SEO Keywords" value="<?php echo e($pages->meta_keywords); ?>">
                                </div>
                                <?php $__errorArgs = ['meta_keywords'];
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

                            <div class="form-group row">
                                <label for="meta_description" class="col-sm-12 col-form-label">SEO
                                    Description</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="3"
                                        placeholder="SEO Description"><?= $pages->meta_description ?></textarea>
                                </div>
                                <?php $__errorArgs = ['meta_description'];
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
    <script src="<?php echo e(asset('Backend/assets/js/image-uploader.min.js')); ?>"></script>
    <script>
        $('.input-images-1').imageUploader();
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/frontendSettings/about_us.blade.php ENDPATH**/ ?>