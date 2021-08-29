
<?php $__env->startSection('content'); ?>

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="<?php echo e(url('admin-blogs/create')); ?> " class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Add a New Blog
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
                        <th>Blog Name</th>
                        <th>Blog Detail</th>
                        <th>Created At</th>
                        <th>#</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php //print_r($mdata); ?>
                    <?php $__currentLoopData = $mdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($module->id); ?></td>
                            <td><?php echo $module->thumbs; ?></td>
                            <td><?php echo e($module->blog_name); ?></td>
                            <td><?php echo str_limit(strip_tags($module->blog_detail), 30); ?></td>
                            <td><?php echo e($module->created_at); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin-blogs/'.$module->id)); ?>/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <form action="<?php echo e(route('admin-blogs.destroy', $module->id)); ?>" method="POST">
                                    <?php echo e(method_field('DELETE')); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <button><i class="fa fa-trash"></i></button>
                                </form>
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