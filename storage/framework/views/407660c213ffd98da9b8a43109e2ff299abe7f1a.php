<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="<?php echo e(url('admin-librarys/create')); ?> " class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Add a New Library
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Library Name</th>
                        <th>Library Detail</th>
                        <th>Created At</th>
                        <th>#</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php //print_r($mdata); ?>
                    <?php $__currentLoopData = $mdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($module->id); ?></td>
                            <td><img width="50" src="<?php echo asset('uploads/'.$module->img_thumb); ?>"></td>
                            <td><?php echo e($module->library_name); ?></td>
                            <td><?php echo str_limit(strip_tags($module->library_detail), 30); ?></td>
                            <td><?php echo e($module->created_at); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin-librarys/'.$module->id)); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?php echo e(url('admin-librarys/'.$module->id)); ?>" class="btn btn-danger" data-method="delete"
                                   data-confirm="Are you sure?"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $mdata->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset("js/laravel-delete.js")); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>