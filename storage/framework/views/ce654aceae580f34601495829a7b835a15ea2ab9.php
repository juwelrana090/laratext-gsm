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
<?php
    $UserAccess = Auth::user();
?>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card" style="background-color: #fde4e477">
            <div class="card-header">
                <h4 class="card-title">Edit Role</h4>
            </div>
            <div class="card-content">
                <div class="card-body" style="position: relative;">
                    <div class="row">
                        <div class="col-12">
                           <form action="<?php echo e(route('admin.roles.update',$singleRole->id)); ?>" method="post">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="first-name-vertical">Role Name</label>
                                    <input type="text" id="first-name-vertical" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($singleRole->name); ?>" name="name" placeholder="Role Name">
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

                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <h4>Assign Permissions</h4>

                                        <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" <?php echo e(App\Models\User::roleHasPermission($singleRole,$permissions)?'checked':''); ?> value="1" name="customCheck" id="assignAllPermissions">
                                                <label class="custom-control-label" for="assignAllPermissions"> <h6>Assign All Permissions</h6></label>
                                            </div>
                                        </fieldset>
                                        <hr>
                                        <?php
                                            $i =1;
                                        ?>
                                        <?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $permissions = App\Models\User::getPermissionGroupsName($group->group_name);
                                                $j =1;
                                            ?>
                                            <div class="row mb-1">
                                                <div class="col-4">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="<?php echo e($group->group_name); ?>"  id="assignAllGroupPermissions<?php echo e($i); ?>" onclick="checkPermissionByGroup('role-<?php echo e($i); ?>-management-checkbox',this)" <?php echo e(App\Models\User::roleHasPermission($singleRole,$permissions)?'checked':''); ?>>
                                                            <label class="custom-control-label" for="assignAllGroupPermissions<?php echo e($i); ?>"><h6><?php echo e($group->group_name); ?></h6></label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-8 role-<?php echo e($i); ?>-management-checkbox">
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <fieldset>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="permissions[]" class="custom-control-input" value="<?php echo e($permission->name); ?>" <?php echo e($singleRole->hasPermissionTo($permission->name)? 'checked' :''); ?>  name="name" id="customCheck<?php echo e($permission->id); ?>">
                                                                <label class="custom-control-label" for="customCheck<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                                            </div>
                                                        </fieldset>
                                                        <?php $j++; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <?php $i++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
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
                <h4 class="card-title">Role List</h4>
            </div>
            <div class="card-content">
                <div class="card-body" style="position: relative;">
                     <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width:5%">SL</th>
                                                <th style="width:15%">Name</th>
                                                <th scope="col">Permissions</th>
                                                <th style="width:18%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($role->id!==1): ?>
                                                <tr>
                                                    <th scope="row"><?php echo e($key+1); ?></th>
                                                    <td><?php echo e($role->name); ?></td>
                                                    <td>
                                                        <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="badge badge-danger font-weight-bold"><?php echo e($perm->name); ?></div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td>
                                                        <?php if($UserAccess->can('role.edit')): ?>
                                                            <a href="<?php echo e(route('admin.roles.edit',$role->id)); ?>" class="btn btn-sm btn-primary text-white">edit</a>
                                                        <?php endif; ?>
                                                        <?php if($UserAccess->can('role.delete')): ?>
                                                            <a onclick="event.preventDefault();
                                                            document.getElementById('delete-form-<?php echo e($role->id); ?>').submit();" href="<?php echo e(route('admin.roles.destroy',$role->id)); ?>"  class="btn btn-sm btn-danger text-white">x</a>
                                                            <form id="delete-form-<?php echo e($role->id); ?>" action="<?php echo e(route('admin.roles.destroy',$role->id)); ?>" method="POST" class="d-none">
                                                                <?php echo method_field('DELETE'); ?>
                                                                <?php echo csrf_field(); ?>
                                                            </form>
                                                        <?php endif; ?>

                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
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
<script>
    $('#assignAllPermissions').click(function(){
        if($(this).is(':checked')){
            $('input[type=checkbox]').prop('checked',true);
        }else{
            $('input[type=checkbox]').prop('checked',false);
        }
    })
    function checkPermissionByGroup(className,checkThis){
        const groupIdName = $('#'+checkThis.id);
        const classCheckBox = $('.'+className+' input');

        if(groupIdName.is(':checked')){
            classCheckBox.prop('checked',true);
        }else{
            classCheckBox.prop('checked',false);
        }
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\role\edit.blade.php ENDPATH**/ ?>