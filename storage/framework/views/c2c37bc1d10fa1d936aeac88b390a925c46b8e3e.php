

<?php $__env->startSection('content'); ?>

    <!-- Header -->
    <section class="programs">
       <div class="Coontact_us">
      <img alt="" src="<?php echo e(asset('assets/img/banner_img.png')); ?>">
      <div class="Contact-header text-center">
        <h2 class="mb-4">Our Product</h2> 
      </div>
    </div>
    </section>
    <!-----/End Header--->

<div class="container" style="margin-top: 40px;">

    <div class="row">
        <div class="col-sm-12 locations text-center">
            <h2>ORDERS</h2><br><br>
            <?php if(count($orders) == 0): ?>
                <p>You do not have an order yet</p>
            <?php else: ?>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Orders ID</th>
                        <th>Order Price</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-$order">
                            <td>PN-<?php echo e($order->id); ?></td>
                            <td>$<?php echo e($order->order_price); ?> </td>
                            <td><?php echo e($order->status); ?></td>
                            <td><a href="<?php echo e(url('/orders/'.$order->id)); ?>" class="btn-sm btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div><!-- Container /- -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>