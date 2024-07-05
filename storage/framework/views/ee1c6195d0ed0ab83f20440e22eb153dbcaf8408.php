<?php $__env->startSection('title', 'Edit Car Details'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('theme_css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('Backend/app-assets/vendors/css/forms/select/select2.min.css')); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
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
    <form action="<?php echo e(route('admin.cars.update', $car->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title">Edit Basic Specs</h4>
                            <hr>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Prouct Title</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeyup="convertToSlug(this.value)" name="title"
                                        value="<?php echo e($car->title); ?>"
                                        class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title"
                                        placeholder="Title">
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
                                <label for="new_price" class="col-sm-2 col-form-label">New Price</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeyup="convertToSlug(this.value)" name="new_price"
                                        class="form-control <?php $__errorArgs = ['new_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="new_price"
                                        placeholder="Price" value="<?php echo e($car->new_price); ?>">
                                </div>
                                <?php $__errorArgs = ['new_price'];
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
                                <label for="original_price" class="col-sm-2 col-form-label">Original Price</label>
                                <div class="col-sm-10">
                                    <input type="text" onkeyup="convertToSlug(this.value)" name="original_price"
                                        class="form-control <?php $__errorArgs = ['original_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="original_price" placeholder="Price" value="<?php echo e($car->original_price); ?>">
                                </div>
                                <?php $__errorArgs = ['original_price'];
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
                                <label for="car_type" class="col-sm-2 col-form-label">Catgory</label>
                                <div class="col-sm-10">
                                    <select name="car_type_id" class="form-control select2" id="car_type">
                                        <?php $__currentLoopData = $car_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e($car->car_type_id == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_category_id" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <select name="sub_category_id" class="form-control select2" id="sub_category_id">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e($car->sub_category_id == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="brandSelect" class="col-sm-2 col-form-label">Menufacturer Brands</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="brand_id" id="brandSelect">
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($brand->id); ?>"
                                                <?php echo e($car->brand_id == $brand->id ? 'selected' : ''); ?>><?php echo e($brand->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fuelType" class="col-sm-2 col-form-label">Vehicle Brand</label>
                                <div class="col-sm-10">
                                    <select name="vehicle_brands" class="form-control select2" id="fuelType">
                                        <?php $__currentLoopData = $fuels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e($car->fuel_type_id == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h4 class="card-title">General Description</h4>
                            <div class="form-group mt-1">
                                <label for="exampleFormControlSelect1" class="font-weight-bold">English</label>
                                <textarea name="general_dsc" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="3"><?php echo e($car->general_dsc); ?></textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>

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
                                        placeholder="SEO Title" value="<?php echo e($car->seo_title); ?>">
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
                                <label for="seo_keywords" class="col-sm-2 col-form-label">SEO
                                    Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" name="seo_keywords"
                                        class="form-control <?php $__errorArgs = ['seo_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="seo_keywords"
                                        placeholder="SEO Keywords" value="<?php echo e($car->seo_keywords); ?>">
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
                                <label for="seo_description" class="col-sm-2 col-form-label">SEO
                                    Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="seo_description" id="seo_description" rows="3"
                                        placeholder="SEO Description">
                        <?php echo e($car->seo_description); ?>

                    </textarea>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title text-uppercase">Car Images
                                
                            </h4>
                            <hr>
                            <div class="previews_car">
                                <?php if($car->CarImage): ?>
                                    <?php $__currentLoopData = $car->CarImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="previews_car_img">
                                            <img src="<?php echo e(thumbnail($image->image)); ?>" alt="" srcset="">
                                            <div class="delete_preview_image"><a
                                                    href="<?php echo e(route('car.image.delete', $image->id)); ?>"
                                                    class="text-white">x</a></div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="input-images-1" style="padding-top: .5rem;"></div>
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
                                <label for="product_name" class="col-sm-2 col-form-label">Product Name </label>
                                <div class="col-sm-10">
                                    <input name="product_name" type="text" class="form-control" id="product_name"
                                        placeholder="Product Name" value="<?php echo e($car->product_name); ?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="car_type" class="col-sm-2 col-form-label">Catgory</label>
                                <div class="col-sm-10">
                                    <select name="car_type_id" class="form-control select2" id="car_type">
                                        <?php $__currentLoopData = $car_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e($car->car_type_id == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_category_id" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <select name="sub_category_id" class="form-control select2" id="sub_category_id">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e($car->sub_category_id == $item->id ? 'selected' : ''); ?>>
                                                <?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" name="type" class="form-control" id="type"
                                        placeholder="Type" value="<?php echo e($car->type); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="condition" class="col-sm-2 col-form-label">Condition</label>
                                <div class="col-sm-10">
                                    <input name="condition" type="text" class="form-control" id="condition"
                                        placeholder="condition" value="<?php echo e($car->condition); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="part_no" class="col-sm-2 col-form-label">Part No</label>
                                <div class="col-sm-10">
                                    <input name="part_no" type="text" class="form-control" id="part_no"
                                        placeholder="Part No" value="<?php echo e($car->part_no); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="application" class="col-sm-2 col-form-label">Application</label>
                                <div class="col-sm-10">
                                    <input name="application" type="text" class="form-control" id="application"
                                        placeholder="Application" value="<?php echo e($car->application); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="uses" class="col-sm-2 col-form-label">Uses</label>
                                <div class="col-sm-10">
                                    <input name="uses" type="text" class="form-control" id="uses"
                                        placeholder="Uses" value="<?php echo e($car->uses); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_note" class="col-sm-2 col-form-label">Product Note</label>
                                <div class="col-sm-10">
                                    <input name="product_note" type="text" class="form-control" id="product_note"
                                        placeholder="Product Note" value="<?php echo e($car->product_note); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="delivery_note" class="col-sm-2 col-form-label">Delivery Note</label>
                                <div class="col-sm-10">
                                    <input name="delivery_note" type="text" class="form-control" id="delivery_note"
                                        placeholder="Delivery Note" value="<?php echo e($car->delivery_note); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                    <input name="brand" type="text" class="form-control" id="brand"
                                        placeholder="Brand" value="<?php echo e($car->brand); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="made" class="col-sm-2 col-form-label">Made</label>
                                <div class="col-sm-10">
                                    <input name="made" type="text" class="form-control" id="made"
                                        placeholder="Made" value="<?php echo e($car->made); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="payment_options" class="col-sm-2 col-form-label">Payment Options</label>
                                <div class="col-sm-10">
                                    <input name="payment_options" type="text" class="form-control"
                                        id="payment_options" placeholder="Payment Options"
                                        value="<?php echo e($car->payment_options); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
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
            let url = '/get/model/' + id;
            let carModel_id = <?php echo e($car->model_id); ?>;
            $.ajax(url, {
                success: function(data) {
                    $('#brand_model').empty();
                    let models = data;
                    var html = '';
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html +=
                            `<option value="${getId}" ${(carModel_id==getId)?'selected':''} >${GetValue}</option>`;
                    }
                    console.log(html)
                    $('#brand_model').append(html);
                }
            })


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
                            html += "<option value=" + getId + "  >" + GetValue + "</option>";
                        }
                        console.log(html)
                        $('#brand_model').append(html);
                    }
                })
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/car/edit.blade.php ENDPATH**/ ?>