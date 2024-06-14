<div class="table-responsive">
    <table class="table mb-0">
        <thead class="thead-dark">
            <tr>
                <th style="width:5%">SL</th>
                <th style="width:15%">Name</th>
                <th style="width:15%">image</th>
                <th style="width:15%">Description</th>
                <th style="width:18%">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($key + 1); ?></th>
                    <td><?php echo e($item->name); ?></td>
                    <td><img src="<?php echo e(asset($item->image)); ?>" width="70px"></td>
                    <td><?php echo e($item->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.car_types.edit', $item->id)); ?>"
                            class="btn btn-sm btn-primary text-white">edit</a>
                        
                        <div class="modal fade" id="typeDelete<?php echo e($item->id); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Type</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are You Sure You want to delete <?php echo e($item->name); ?> Type?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <a onclick="event.preventDefault();
                                  document.getElementById('delete-form-<?php echo e($item->id); ?>').submit();"
                                            href="<?php echo e(route('admin.car_types.destroy', $item->id)); ?>"
                                            class="btn btn-danger text-white" data-toggle="modal"
                                            data-target="#colorDelete">Delete</a>
                                        <form id="delete-form-<?php echo e($item->id); ?>"
                                            action="<?php echo e(route('admin.car_types.destroy', $item->id)); ?>" method="POST"
                                            class="d-none">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views/backend/carTypes/type_list.blade.php ENDPATH**/ ?>