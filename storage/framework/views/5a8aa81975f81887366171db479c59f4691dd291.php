<?php $__env->startSection('content'); ?>
<!------Profile------->
    <section class="classes-section programs">
        <div class="container">

            <!--START teacher-->
            <div class="row">
                <div class="col-sm-12 form-group">
                    <span class="invite-friend pull-right">
                        <button type="button" class="btn invite-btn">Invite a friend</button>
                    </span>
                </div>
                <div class="col-md-12">
                    <div class="ED_profile">
                        <div class="ed_circle">
                            ED
                        </div>
                        <div class="ed_head text-center">
                            <h4><?php echo e(Auth::user()->name); ?> </h4>
                            <h6>Member Since:<?php echo e(date('M Y',strtotime(Auth::user()->created_at))); ?></h6>
                            <div class="edit">
                                <a href="<?php echo e(url('profile/'.Auth::user()->id.'/edit')); ?>"> Edit Profile</a>
                            </div>
                        </div>
                        <div class="weekle">
                            <h6>Weekly class tracker</h6>
                            <span class="pull-left">Strive for five 0/5</span><span class="pull-right"><a
                                    href="ChatHistory.php">Past class History</a></span>
                        </div>
                        <!-- <div class="not"> -->
                        <!-- <span class="Not"> -->
                        <!-- <button type="button" class="btn invite-btn">Not sure where to start?<br> -->
                        <!-- Checkout our price for you -->
                        <!-- </button> -->
                        <!-- </span> -->
                        <!-- </div> -->

                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>