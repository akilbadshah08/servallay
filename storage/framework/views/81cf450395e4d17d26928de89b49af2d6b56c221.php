<?php $__env->startSection('content'); ?>



     <div class="page-header">

      <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">User</a></li>
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
                        <h5 class="col-sm-6">User List</h5>
                    </div>
                    <div class="card-body">
                       
                 
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Name</th>

                                        <th>Email</th>


                                        <th>Date</th>



                                    </tr>

                                </thead>

                                <tbody>

                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>

                                        <td><?php echo e($user->id); ?></td>

                                        <td><?php echo e($user->first_name.' '.$user->last_name); ?></td>

                                        <td><?php echo e($user->email); ?></td>

                                        <td><?php echo e($user->created_at); ?></td>


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