


<?php $__env->startSection('content'); ?>
    <!------DEmand video------->
    <section class="classes-section programs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3 class="text-center">Blog</h3>
                    </div>
                </div>
                <div class="col-sm-12 Blogger">

                 <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-sm-4 col-xs-12 B_card">

                        <div class="card-img">
                            <?php echo $blog->thumbs; ?>


                        </div>
                        <div class="card-desc">
                            <h3><?php echo e($blog->blog_name); ?></h3>
                            <p><?php echo str_limit(strip_tags($blog->blog_detail), 30); ?></p>
                            <a href="<?php echo e(url('blog_detail/'. $blog->slug )); ?>" class="primary-btn f-btn w-max mt-2">Read</a>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </div>
            </div>
        </div>
    </section>
    <!------/DEmand video------>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>