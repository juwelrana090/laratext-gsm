<?php $__env->startSection('content'); ?>
<div class="row m-0">
    <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
        <img src="<?php echo e(asset('Backend/app-assets/images/pages/forgot-password.png')); ?>" alt="branding logo">
    </div>
    <div class="col-lg-6 col-12 p-0">
        <div class="card rounded-0 mb-0 px-2 py-1">
            <div class="card-header pb-1">
                <div class="card-title">
                    <h4 class="mb-0">Recover your password</h4>
                </div>
            </div>
            <p class="px-2 mb-0">Please enter your email address and we'll send you instructions on how to reset your password.</p>
            <div class="card-content">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-label-group">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            <label for="inputEmail">Email</label>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </form>
                    <div class="float-md-left d-block mb-1">
                        <a href="<?php echo e(url('/login')); ?>" class="btn btn-outline-primary btn-block px-75">Back to Login</a>
                    </div>
                    <div class="float-md-right d-block mb-1">
                        <button type="submit" class="btn btn-primary btn-block px-75">Recover Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.auth_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\auth\passwords\email.blade.php ENDPATH**/ ?>