<?php $__env->startSection('title', 'Product Add'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('theme_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_css'); ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('Backend/app-assets/vendors/css/forms/select/select2.min.css')); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_css'); ?>
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-label {
            margin-left: 12px;
        }

        .cke_contents {
            height: 325px !important;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/assets/css/image-uploader.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('admin.cars.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Basic Specs</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Product Title</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeyup="convertToSlug(this.value)" name="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="title" placeholder="Title">
                                </div>
                                <?php $__errorArgs = ['title'];
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
                                <label for="brandSelect" class="col-sm-2 col-form-label">Menufacturer Brands</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="brand_id" id="brandSelect">
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="vehicle_brands" class="col-sm-2 col-form-label">Vehicle Brands</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="vehicle_brands" id="vehicle_brands">
                                        <?php $__currentLoopData = $fuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($fuel->id); ?>" <?php echo e($fuel->name=='Unknown'?'selected':''); ?>><?php echo e($fuel->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            <h4 class="card-title">General Description</h4>
                            <div class="form-group mt-1">
                                <label for="exampleFormControlSelect1" class="font-weight-bold">English</label>
                                <textarea name="general_dsc" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <hr>
                            <div style="background-color: red;color:white" class="p-2">
                                <h4 class="card-title text-white">Select What you are showing</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" checked name="pub_place" id="new_arrivals"
                                        value="new_arrivals">
                                    <label class="form-check-label text-white" for="new_arrivals">Compressors</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pub_place" id="best_selling"
                                        value="best_selling">
                                    <label class="form-check-label text-white" for="best_selling">Condensers & Evaporators</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pub_place" id="sold" value="AC Parts">
                                    <label class="form-check-label text-white" for="sold">AC Parts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title text-uppercase">Product Images</h4>
                            <hr>
                            <div class="input-images-1"></div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title text-uppercase">Product Specs</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="product_name " class="col-sm-2 col-form-label">Product Name </label>
                                <div class="col-sm-10">
                                    <input name="product_name " type="text" class="form-control" id="product_name "
                                        placeholder="Product Name ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="car_type" class="col-sm-2 col-form-label">Catgory</label>
                                <div class="col-sm-10">
                                    <select name="car_type_id" class="form-control select2" id="car_type">
                                        <?php $__currentLoopData = $car_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_category_id" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <select name="sub_category_id" class="form-control select2" id="sub_category_id">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" name="type" class="form-control" id="type"
                                        placeholder="Type">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="condition" class="col-sm-2 col-form-label">Condition</label>
                                <div class="col-sm-10">
                                    <input name="condition" type="text" class="form-control" id="condition"
                                        placeholder="condition">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="part_no" class="col-sm-2 col-form-label">Part No</label>
                                <div class="col-sm-10">
                                    <input name="part_no" type="text" class="form-control" id="part_no"
                                        placeholder="Part No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="application" class="col-sm-2 col-form-label">Application</label>
                                <div class="col-sm-10">
                                    <input name="application" type="text" class="form-control" id="application"
                                        placeholder="Application">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="uses" class="col-sm-2 col-form-label">Uses</label>
                                <div class="col-sm-10">
                                    <input name="uses" type="text" class="form-control" id="uses"
                                        placeholder="Uses">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_note" class="col-sm-2 col-form-label">Product Note</label>
                                <div class="col-sm-10">
                                    <input name="product_note" type="text" class="form-control" id="product_note"
                                        placeholder="Product Note">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="delivery_note" class="col-sm-2 col-form-label">Delivery Note</label>
                                <div class="col-sm-10">
                                    <input name="delivery_note" type="text" class="form-control" id="delivery_note"
                                        placeholder="Delivery Note">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                    <input name="brand" type="text" class="form-control" id="brand"
                                        placeholder="Brand">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="made" class="col-sm-2 col-form-label">Made</label>
                                <div class="col-sm-10">
                                    <input name="made" type="text" class="form-control" id="made"
                                        placeholder="Made">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="payment_options" class="col-sm-2 col-form-label">Payment Options</label>
                                <div class="col-sm-10">
                                    <input name="payment_options" type="text" class="form-control" id="payment_options"
                                        placeholder="Payment Options">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">SEO Info</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="seo_title" class="col-sm-2 col-form-label">SEO Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="seo_title"
                                        class="form-control <?php $__errorArgs = ['seo_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="seo_title"
                                        placeholder="SEO Title">
                                </div>
                                <?php $__errorArgs = ['seo_title'];
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
                                <label for="seo_keywords" class="col-sm-2 col-form-label">SEO Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" name="seo_keywords"
                                        class="form-control <?php $__errorArgs = ['seo_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="seo_keywords" placeholder="SEO Keywords">
                                </div>
                                <?php $__errorArgs = ['seo_keywords'];
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
                                <label for="seo_description" class="col-sm-2 col-form-label">SEO Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="seo_description" id="seo_description" rows="3"
                                        placeholder="SEO Description"></textarea>
                                </div>
                                <?php $__errorArgs = ['seo_description'];
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

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
                <hr>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('theme_js'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_js'); ?>
    <script src="<?php echo e(asset('Backend/app-assets/vendors/js/forms/select/select2.full.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_js'); ?>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="<?php echo e(asset('Backend/assets/js/image-uploader.min.js')); ?>"></script>
    <script>
        $('.input-images-1').imageUploader();
    </script>
    <script type="text/javascript">
        function convertToSlug(str) {
            console.log(str)
            //replace all special characters | symbols with a space
            str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
                .toLowerCase();
            // trim spaces at start and end of string
            str = str.replace(/^\s+|\s+$/gm, '');

            // replace space with dash/hyphen
            str = str.replace(/\s+/g, '-');
            document.getElementById("title_slug").value = str;
            //return str;
        }
    </script>
    <script>
        $(".select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
        $(".select2#brand_model").select2({
            dropdownAutoWidth: true,
            width: '100%',
            placeholder: 'Select Model'
        });

        $(function() {
            $(".datepicker-2").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });
        $(document).ready(function() {
            let id = $('#brandSelect').val();
            let url = '/get/model/' + id
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })
        });
        $("#brandSelect").on("change", function(event) {
            let id = $('#brandSelect').val();
            let url = '/get/model/' + id
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/car/index.blade.php ENDPATH**/ ?>