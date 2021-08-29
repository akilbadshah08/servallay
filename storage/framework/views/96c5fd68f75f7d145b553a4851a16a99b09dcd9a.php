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

    <!-- Checkout Content -->
    <div class="container-fluid no-padding checkout-content" style="margin-top: 40px">
        <!-- Container -->
        <div class="container">
            
                <div class="row">
                    <form action="<?php echo e(route('pay')); ?>" method="POST" class="col-md-12">
                        <?php echo e(csrf_field()); ?>

                        <div class="section-padding"></div>

                        <!-- Order Summary -->
                        <!-- Payment Mode -->
                        <div class="col-md-12 payment-mode">
                            <div class="section-title">
                                <h3>CONTACT AND INVOICE INFORMATION...</h3>
                            </div>

                            <div class="section-padding"></div>
                            <div class="container">


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="form-control" name="surname" id="surname"
                                                   value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control phone" name="phone" id="phone"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="m_phone">Mobile Phone</label>
                                            <input type="text" class="form-control m_phone" name="m_phone" id="m_phone"
                                                   value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control city" name="city" id="city"
                                                   placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control country" name="country" id="country"
                                                   placeholder="" required disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="zipcode">Zip Code</label>
                                            <input type="text" class="form-control zipcode" name="zipcode" id="zipcode"
                                                   placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                   value="" required>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <br><br>
                            <div class="text-center alert alert-info">
                                <h4>TOTAL PRICE</h4>
                                <span class="price"><?php echo e(Cart::total()); ?>

                                    <small> ₺</small></span>
                            </div>


                            <div class="section-padding"></div>
                        </div>
                        <!-- Order Summary /- -->

                        <!-- Payment Mode -->
                        <div class="container-">
                            <div class="row">
                                <div class="col-md-12">
                                   <input type="submit" name="">

                                    <div id="iyzipay-checkout-form" class="responsive"></div>
                                </div>

                                <br><br>

                                <div class="section-padding"></div>
                            </div>
                        </div>

                    </form>
                </div>
        </div><!-- Container /- -->
    </div><!-- Checkout Content /- -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>