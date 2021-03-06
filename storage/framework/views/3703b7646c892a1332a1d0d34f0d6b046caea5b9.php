<?php $__env->startSection('content'); ?>



     <div class="page-header">

      <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Service List</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Service</a></li>
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
                        <h5 class="col-sm-6">Service List</h5>
                    </div>
                    <div class="card-body">
                       
                 
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Logo</th>
                                        <th>Name</th>

                                        <th>Category</th>

                                        <th>Sub Category</th>

                                        <th>Type</th>

                                        <th>Date</th>

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


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.dashboard.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>