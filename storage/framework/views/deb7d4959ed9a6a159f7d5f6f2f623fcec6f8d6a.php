<?php $__env->startSection('title','Role'); ?>
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
                <h4 class="card-title">Edit Users</h4>
            </div>
            <div class="card-content">
                <div class="card-body" style="position: relative;">
                    <div class="row">
                        <div class="col-12">
                           <form action="<?php echo e(route('admin.users.update',$user->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="first-name-vertical">Name*</label>
                                    <input type="text" required id="first-name-vertical" value="<?php echo e($user->name); ?>" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" placeholder="Full Name">
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
                                    <label for="first-name-vertical">User Email*</label>
                                    <input type="email" value="<?php echo e($user->email); ?>" required id="first-name-vertical" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="User email">
                                    <?php $__errorArgs = ['email'];
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
                                    <label for="first-name-vertical">User phone</label>
                                    <input type="text" value="<?php echo e($user->phone); ?>" id="first-name-vertical" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" placeholder="User phone">
                                    <?php $__errorArgs = ['phone'];
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>Assing Role </h5>
                                        <?php
                                           $UserAssingroles = $user->getRoleNames();
                                        ?>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" <?php echo e($user->hasRole($role->name)?'checked':''); ?> value="<?php echo e($role->name); ?>" name="roles[]" id="assignAllPermissions<?php echo e($role->name); ?>">
                                                    <label class="custom-control-label" for="assignAllPermissions<?php echo e($role->name); ?>"><?php echo e($role->name); ?></label>
                                                </div>
                                            </fieldset>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Profile </h5>
                                        <div class="avatar mr-1 avatar-xl">
                                            <img src="<?php echo e($user->image?asset($user->image):asset('backend/app-assets/images/portrait/small/avatar-s-12.jpg')); ?>" alt="avtar img holder">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">User Image</label>
                                    <input type="file" id="first-name-vertical" class="form-control <?php $__errorArgs = ['image'];
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
                                    <label for="first-name-vertical">Password*</label>
                                    <input type="password"  id="first-name-vertical" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="xxxxxxx">
                                    <?php $__errorArgs = ['password'];
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
                                    <label for="first-name-vertical">Password Confirmation*</label>
                                    <input type="password"  id="first-name-vertical" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password_confirmation" placeholder="xxxxxxx">
                                    <?php $__errorArgs = ['password_confirmation'];
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
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User List</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body text-center mx-auto">
                                            <div class="avatar avatar-xl">
                                                <img class="img-fluid" src="<?php echo e($user->image?asset($user->image):asset('backend/app-assets/images/portrait/small/avatar-s-12.jpg')); ?>" alt="img placeholder">
                                            </div>
                                            <div class="row m-0">
                                                <div class="col-sm-12 text-center">
                                                    <h4><?php echo e($user->name); ?></h4>
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <p class="">
                                                        <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span><?php echo e($userRole); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </p>
                                                </div>
                                            </div>
                                            <button class="btn gradient-light-primary btn-block mt-1">Email: <?php echo e($user->email); ?></button>
                                            <button class="btn gradient-light-primary btn-block mt-1">Phone: <?php echo e($user->phone); ?></button>
                                            <div class="d-flex justify-content-between mt-2">
                                                <div class="uploads">
                                                    <a href="<?php echo e(route('admin.users.edit',$user->id)); ?>" class="btn btn-warning" title="Edit"><i class="feather icon-edit-1"></i></a>
                                                </div>
                                                <div class="followers">
                                                    <a href="#" class="btn btn-success" title="View User"><i class="feather icon-eye"></i></a>
                                                </div>
                                                <?php if(Auth::user()->id !== $user->id): ?>
                                                <div class="following">
                                                    <a onclick="event.preventDefault();
                                                    document.getElementById('delete-user-<?php echo e($user->id); ?>').submit();" href="<?php echo e(route('admin.users.destroy',$user->id)); ?>"  class="btn btn-danger" title="Delete"><i class="feather icon-trash"></i></a>
                                                    <form id="delete-user-<?php echo e($user->id); ?>" action="<?php echo e(route('admin.users.destroy',$user->id)); ?>" method="POST" class="d-none">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\user\edit.blade.php ENDPATH**/ ?>