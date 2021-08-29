<?php $__env->startSection('content'); ?>



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row" style="margin-bottom: 30px;">

            <div class="col-md-12">
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <table class="table table-hover">

                    <thead>

                    <tr>

                        <th>ID</th>

                        <th>Image</th>

                        <th>Name</th>

                        <th>Category</th>

                        <th>Sub Category</th>

                        <th>Type</th>

                        <th>Created At</th>

                        <th>#</th>



                    </tr>

                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td><?php echo e($provider->id); ?></td>

                            <td>

                                <img width="50" src="../../uploads/<?php echo e($provider->logo_image); ?>">

                                </td>

                            <td> <?php echo e($provider->name); ?>  </td>

                            <td> <?php echo e($provider->category_name); ?>  </td>

                            <td> <?php echo e($provider->sub_category_name); ?>  </td>

                            <td> <?php echo e($provider->provider_type); ?>  </td>

                            <td><?php echo e($provider->created_at); ?></td>

                            <td>


                                <form action="<?php echo e(route('admin-providers.destroy', $provider->id)); ?>" method="POST">

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

                        <?php echo $providers->links(); ?>


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