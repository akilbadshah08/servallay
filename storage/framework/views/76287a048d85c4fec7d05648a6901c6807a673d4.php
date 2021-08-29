


<?php $__env->startSection('content'); ?>
    <!------DEmand video------->
    <section class="classes-section programs">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 Blogger_Deatil">

                    <div class="col-md-8 col-sm-6">
                        <div class="blog_grid_item blog_f">
                            <div class="blog_grid_img">
                                <img src="<?php echo asset('uploads/'.$blog->images[0]->name); ?>">

                                <!--<div class="blog_share_area">-->
                                <!--    <a href="#"><i class="fa fa-eye"></i>4</a>-->
                                <!--    <a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a>-->
                                    <!-- <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a> -->
                                <!--</div>-->
                            </div>
                            <div class="blog_grid_content clog_c">
                                <h1><?php echo e($blog->blog_name); ?></h1>
                                <div class="blog_grid_date">
                                    <a href="javascript:void(0);">By admin, On</a>
                                    <a href="javascript:void(0);"><?php echo e(date('d M, Y',strtotime( $blog->created_at))); ?></a>
                                    <!--<a href="javascript:void(0);">dating</a>-->
                                </div>
                             
                                <?php echo $blog->blog_detail; ?>

                            </div>
                        </div>


                    </div>

                    <div class="col-sm-4 right_side_content col-xs-12 ">
                        <aside class="s_widget recent_post_widget">
                            <div class="s_title">
                                <h4>Recent Blog</h4>
                            </div>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media">
                                <div class=" col-xs-3 media-left">
                                    <?php echo $blog->thumbs; ?>

                                </div>
                                <div class="media-body">
                                    <h4><a
                                            href="<?php echo e(url('blog_detail/'. $blog->slug )); ?>">><?php echo e($blog->blog_name); ?></p></a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </aside>

                    </div>


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