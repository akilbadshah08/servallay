<?php $__env->startSection('content'); ?>



     <div class="page-header">

      <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin-dashboard')); ?>">Home</a></li>
                            <li class="breadcrumb-item">List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      

        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <h5 class="col-sm-6">Category List</h5>
                    </div>
                    <div class="card-body">
                       <div class="py-3">
                            <a class="col-sm-3 btn btn-info" href="<?php echo e(url('admin-category')); ?>/create">Add  Category</a>
                           
                       </div>
                 
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


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

                                            <td><img style="width: 30px" src="<?php echo e(url('uploads/category/'.$category->image)); ?>"></td>


                                            <td><?php echo e($category->name); ?></td>

                                            <td>

                                                <a href="<?php echo e(url('admin-category/'.$category->id.'/edit')); ?>" class=""><i

                                                            class="fa fa-edit"></i> Edit</a>
                                                <form style="display: inline" action="<?php echo e(route('admin-category.destroy', $category->id)); ?>" method="POST">

                                                    <?php echo e(method_field('DELETE')); ?>


                                                    <?php echo e(csrf_field()); ?>


                                                    <button style="border: 0;" onclick='return confirm("Are you sure?")' class=""><i class="fa fa-trash"></i> Delete</button>

                                                </form>            
                                            </td>

                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>
                    
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    





<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('../')); ?>/assets/css/plugins/dataTables.bootstrap4.min.css">
<?php $__env->stopSection(); ?>    
<?php $__env->startSection('js'); ?>

<script src="<?php echo e(asset('../')); ?>/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('../')); ?>/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('../')); ?>/assets/js/pages/data-basic-custom.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $(function() {
        // [ Add phone validator ]

        <?php if(isset($_GET['success'])): ?>
         Swal.fire({
            icon: "success",
            title: 'Category <?php echo e($_GET["success"]); ?> Successfully',
        })
        <?php endif; ?>
    })
})
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.dashboard.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>