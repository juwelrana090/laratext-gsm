<?php $__env->startSection('title', 'Plans Settings'); ?>
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
        <div class="col-md-12 col-sm-12 mb-2">
            <h1>Plans Settings</h1>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="<?php echo e(route('plans.update', 1)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="1">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Plan Name"
                                value="<?php echo e($plan_1->name); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="<?php echo e($plan_1->contract); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="<?php echo e($plan_1->price_month); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="<?php echo e($plan_1->price_year); ?>" required>
                        </div>

                        <div class="mb-1">
                            <?php $currency = json_decode($plan_1->currency); ?>
                            <label for="price_year" class="col-form-label">Currency</label>
                            <select name="currency" class="form-control select2" id="currency" required>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item['code']); ?>" <?php if ($item['code'] == $currency->code) {
                                        echo 'selected';
                                    } ?>>
                                        <?php echo e($item['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_1">
                            <?php
                            $description = [];
                            if ($plan_1->description) {
                                $description = json_decode($plan_1->description);
                            }
                            ?>

                            <?php
                                $i = 1;
                            ?>

                            <?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12 mb-1" id="des_1_<?php echo e($i); ?>">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        <?php if($item->show == 'true'): ?> selected <?php endif; ?>>Yes</option>
                                                    <option value="false"
                                                        <?php if($item->show == 'false'): ?> selected <?php endif; ?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="<?php echo e($item->title); ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_1_<?php echo e($i++); ?>')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_1" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="<?php echo e(route('plans.update', 2)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="2">

                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Plan Name"
                                value="<?php echo e($plan_2->name); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="<?php echo e($plan_2->contract); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="<?php echo e($plan_2->price_month); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="<?php echo e($plan_2->price_year); ?>" required>
                        </div>

                        <div class="mb-1">
                            <?php $currency = json_decode($plan_2->currency); ?>
                            <label for="price_year" class="col-form-label">Currency</label>
                            <select name="currency" class="form-control select2" id="currency" required>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item['code']); ?>" <?php if ($item['code'] == $currency->code) {
                                        echo 'selected';
                                    } ?>>
                                        <?php echo e($item['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_2">
                            <?php
                            $description = [];
                            if ($plan_2->description) {
                                $description = json_decode($plan_2->description);
                            }
                            ?>

                            <?php
                                $i = 1;
                            ?>

                            <?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12 mb-1" id="des_2_<?php echo e($i); ?>">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        <?php if($item->show == 'true'): ?> selected <?php endif; ?>>Yes</option>
                                                    <option value="false"
                                                        <?php if($item->show == 'false'): ?> selected <?php endif; ?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="<?php echo e($item->title); ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_2_<?php echo e($i++); ?>')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_2" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="<?php echo e(route('plans.update', 3)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="3">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Plan Name" value="<?php echo e($plan_3->name); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="<?php echo e($plan_3->contract); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="<?php echo e($plan_3->price_month); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="<?php echo e($plan_3->price_year); ?>" required>
                        </div>

                        <div class="mb-1">
                            <?php $currency = json_decode($plan_3->currency); ?>
                            <label for="price_year" class="col-form-label">Currency</label>
                            <select name="currency" class="form-control select2" id="currency" required>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item['code']); ?>" <?php if ($item['code'] == $currency->code) {
                                        echo 'selected';
                                    } ?>>
                                        <?php echo e($item['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_3">
                            <?php
                            $description = [];
                            if ($plan_3->description) {
                                $description = json_decode($plan_3->description);
                            }
                            ?>

                            <?php
                                $i = 1;
                            ?>

                            <?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12 mb-1" id="des_3_<?php echo e($i); ?>">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        <?php if($item->show == 'true'): ?> selected <?php endif; ?>>Yes</option>
                                                    <option value="false"
                                                        <?php if($item->show == 'false'): ?> selected <?php endif; ?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="<?php echo e($item->title); ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_3_<?php echo e($i++); ?>')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_3" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="<?php echo e(route('plans.update', 4)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="4">
                        <div class="mb-1">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Plan Name" value="<?php echo e($plan_4->name); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="contract" class="col-form-label">Contract</label>
                            <input type="text" class="form-control" id="contract" name="contract"
                                placeholder="Plan Contract" value="<?php echo e($plan_4->contract); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_month" class="col-form-label">Price Monthly</label>
                            <input type="number" class="form-control" id="price_month" name="price_month"
                                value="<?php echo e($plan_4->price_month); ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="price_year" class="col-form-label">Price yearly</label>
                            <input type="number" class="form-control" id="price_year" name="price_year"
                                value="<?php echo e($plan_4->price_year); ?>" required>
                        </div>

                        <div class="mb-1">
                            <?php $currency = json_decode($plan_4->currency); ?>
                            <label for="price_year" class="col-form-label">Currency</label>
                            <select name="currency" class="form-control select2" id="currency" required>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item['code']); ?>" <?php if ($item['code'] == $currency->code) {
                                        echo 'selected';
                                    } ?>>
                                        <?php echo e($item['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="mb-1">
                            <h5>Description List</h5>
                        </div>

                        <div class="row mb-1" id="description_4">
                            <?php
                            $description = [];
                            if ($plan_4->description) {
                                $description = json_decode($plan_4->description);
                            }
                            ?>

                            <?php
                                $i = 1;
                            ?>

                            <?php $__currentLoopData = $description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12 mb-1" id="des_4_<?php echo e($i); ?>">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <select name="des_check[]">
                                                    <option value="true"
                                                        <?php if($item->show == 'true'): ?> selected <?php endif; ?>>Yes</option>
                                                    <option value="false"
                                                        <?php if($item->show == 'false'): ?> selected <?php endif; ?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="des_title[]"
                                            value="<?php echo e($item->title); ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" style="cursor:pointer"
                                                onclick="removeElement('des_4_<?php echo e($i++); ?>')">
                                                <i class="fa fa-trash text-danger" title="Delete"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>


                        <div class="mb-1">
                            <span class="btn btn-sm btn-success" id="add_4" title="Add More Description">
                                <i class="fa fa-plus"></i>
                            </span>
                        </div>

                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
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
    <script type="text/javascript">
        function removeElement(id) {
            var element = document.getElementById(id);
            element.remove();
        }

        $(document).ready(function() {
            let currentTimestamp = Date.now();

            $("#add_1").click(function() {
                $("#description_1").append(`
                        <div class="col-sm-12 mb-1" id="des_1_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_1_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });

            $("#add_2").click(function() {
                $("#description_2").append(`
                        <div class="col-sm-12 mb-1" id="des_2_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_2_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });

            $("#add_3").click(function() {
                $("#description_3").append(`
                        <div class="col-sm-12 mb-1" id="des_3_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_3_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });

            $("#add_4").click(function() {
                $("#description_4").append(`
                        <div class="col-sm-12 mb-1" id="des_4_${currentTimestamp}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <select name="des_check[]">
                                                <option value="true">Yes</option>
                                                <option selected value="false">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="des_title[]" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="cursor:pointer"
                                            onclick="removeElement('des_4_${currentTimestamp}')">
                                            <i class="fa fa-trash text-danger" title="Delete"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                `);
            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/plans/index.blade.php ENDPATH**/ ?>