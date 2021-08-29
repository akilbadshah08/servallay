<?php $__env->startSection('content'); ?>
    <div class="container" style="margin-top: 40px;">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Payment ID</th>
                        <th>Customer Name</th>
                        <th>Plan ID</th>
                        <th>Video ID</th>
                        <th>Program ID</th>
                        <th>Amount</th>
                        <th>Order Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(count($payments) == 0): ?>
                        <tr><td colspan="7">No Records Found</td></tr>
                    <?php endif; ?>
                    <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $payment->id ?></td>
                            <td><?php echo $payment->name ?></td>
                            <td><?php echo $payment->plan_id ?></td>
                            <td><?php echo $payment->library_id ?></td>
                            <td><?php echo $payment->program_id ?></td>
                            <td><?php echo $payment->amount ?></td>
                            <td><?php echo $payment->created_at ?></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($payments->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>