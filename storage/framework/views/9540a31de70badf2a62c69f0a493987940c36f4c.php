<?php $__env->startSection('content'); ?>



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row" style="margin-bottom: 30px;">

            <div class="col-md-12">

                <a href="<?php echo e(url('/admin-category/create')); ?> " class="btn btn-danger">

                    <i class="fa fa-plus"></i>

                    Add a New Category

                </a>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <h3>Category List</h3>

                <table class="table table-hover">

                    <thead>

                    <tr>

                        <th>ID</th>

                        <th>Image</th>

                        <th>name</th>


                        <th>#</th>



                    </tr>

                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>

                            <td><?php echo e($category->id); ?></td>

                            <td><img style="width: 80px" src="<?php echo e(url('uploads/category/'.$category->image)); ?>"></td>


                            <td><?php echo e($category->name); ?></td>

                            <td>

                                <a href="<?php echo e(url('admin-category/'.$category->id.'/edit')); ?>" class="btn btn-primary"><i

                                            class="fa fa-edit"></i> Edit</a>
                                <form action="<?php echo e(route('admin-category.destroy', $category->id)); ?>" method="POST">

                                    <?php echo e(method_field('DELETE')); ?>


                                    <?php echo e(csrf_field()); ?>


                                    <button onclick='return confirm("Are you sure?")' class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                </form>            
                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>

                <div class="row">

                    <div class="col-md-12">

                        <?php echo $categories->links(); ?>


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