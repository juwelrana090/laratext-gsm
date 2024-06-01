<?php $__env->startSection('title', 'Social And WhatsApp'); ?>
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
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Social And WhatsApp</h4>
                </div>
                <div class="card-content">
                    <div class="card-body" style="position: relative;">
                        <div class="row">
                            <div class="col-12">
                                <form action="<?php echo e(route('admin.social.whatsApp.update')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Facebook</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="<?php echo e($socialLInk->fb); ?>" name="fb"
                                            placeholder="Facebook Link">
                                    </div>

                                    <div class="form-group">
                                        <label for="first-name-vertical">Instagram</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="<?php echo e($socialLInk->instagram); ?>" name="instagram"
                                            placeholder="Instagram Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Twitter</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="<?php echo e($socialLInk->twitter); ?>" name="twitter"
                                            placeholder="Twitter Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">Youtube</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="<?php echo e($socialLInk->youtube); ?>" name="youtube"
                                            placeholder="Youtube Link">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-vertical">WhatsApp Number</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control" value="<?php echo e($socialLInk->whatsApp); ?>" name="whatsApp"
                                            placeholder="WhatsApp Number">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dubai Address</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body" style="position: relative;">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="<?php echo e(route('admin.setting.office.location_update','dubai')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="first-name-vertical">TEL</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="<?php echo e(dubai_address()?dubai_address()->tel:''); ?>" name="tel"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Mobile Number</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="<?php echo e(dubai_address()?dubai_address()->mobile:''); ?>" name="mobile"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Address</label>
                                                <textarea id="first-name-vertical"
                                                    class="form-control" name="address"
                                                    placeholder="Address"><?php echo e(dubai_address()?dubai_address()->address:''); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Map Link</label>
                                                    <textarea type="text" id="first-name-vertical"
                                                    class="form-control" name="map"
                                                    placeholder="Map Link"> <?php echo e(dubai_address()?dubai_address()->map:''); ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sharjah Address</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body" style="position: relative;">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="<?php echo e(route('admin.setting.office.location_update','sharjah')); ?>" method="post">
                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">
                                                <label for="first-name-vertical">TEL</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="<?php echo e(sharjah_address()?sharjah_address()->tel:''); ?>" name="tel"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Mobile Number</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="<?php echo e(sharjah_address()?sharjah_address()->mobile:''); ?>" name="mobile"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Address</label>
                                                <textarea id="first-name-vertical"
                                                    class="form-control" name="address"
                                                    placeholder="Address"><?php echo e(sharjah_address()?sharjah_address()->address:''); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Map Link</label>
                                                <textarea type="text" id="first-name-vertical"
                                                    class="form-control" name="map"
                                                    placeholder="Map Link"> <?php echo e(sharjah_address()?sharjah_address()->map:''); ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Abu Dabi Address</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body" style="position: relative;">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="<?php echo e(route('admin.setting.office.location_update','abu_dabi')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="first-name-vertical">TEL</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="<?php echo e(abu_dabi_address()?abu_dabi_address()->tel:''); ?>" name="tel"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Mobile Number</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control" value="<?php echo e(abu_dabi_address()?abu_dabi_address()->mobile:''); ?>" name="mobile"
                                                    placeholder="number">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Address</label>
                                                <textarea id="first-name-vertical"
                                                    class="form-control" name="address"
                                                    placeholder="Address"><?php echo e(abu_dabi_address()?abu_dabi_address()->address:''); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Map Link</label>

                                                    <textarea type="text" id="first-name-vertical"
                                                    class="form-control" name="map"
                                                    placeholder="Map Link"> <?php echo e(abu_dabi_address()?abu_dabi_address()->map:''); ?></textarea>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('theme_js'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('page_js'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom_js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\frontendSettings\social_whatsApp.blade.php ENDPATH**/ ?>