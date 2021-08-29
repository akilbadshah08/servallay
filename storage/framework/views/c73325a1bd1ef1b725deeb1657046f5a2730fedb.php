


<?php $__env->startSection('content'); ?>


    <!-- Header -->
    <section class="programs">
        <div class="Coontact_us">
            <img alt="" src="<?php echo e(asset('assets')); ?>/img/contact_us.jpg">
            <div class="Contact-header">
                <h2 class="mb-4">CONTACT US</h2>
            </div>
        </div>
    </section>
    <!-----/End Header--->

    <!------Contact us------->
    <section class="address_details ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="address_item">
                        <img src="<?php echo e(asset('assets')); ?>/img/address-1.png" alt="">
                        <h3>Address</h3>
                        <h4>PO Box 1074 New York NY10276<br>
                            <!-- 126 East 13th Street NYC 10003<br> -->
                            126 East 13th Street/Union-Square NYC 10003
                        </h4>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="address_item">
                        <img src="<?php echo e(asset('assets')); ?>/img/address-2.png" alt="">
                        <h3>Phone</h3>
                        <h4>212-470-5929</h4>
                    </div>
                </div> -->
                <div class="col-sm-4">
                    <div class="address_item">
                        <img src="<?php echo e(asset('assets')); ?>/img/address-3.png" alt="">
                        <h3>Email</h3>
                        <h4>info@danscool.com</h4>
                        <h4>infodanscool@gmail.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_us ">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123"
                            width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="contact-form">
                        
                        <h1 class="title">Get in Touch</h1>

                        <?php echo Form::open(['url' => route('home.contact_submit'),"method" =>  "post",'class' => 'forms']); ?>

                        
                        
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('message')); ?>

                            </div>
                        <?php endif; ?>
                        
                            <?php echo e(Form::text('name', 'Name',array('required' => 'required'))); ?>

                           
                           <?php if($errors->has('email')): ?>
                                    <span class="invalid feedback" style="color:red" role="alert">
                                        <?php echo e($errors->first('email')); ?>.
                                    </span>
                            <?php endif; ?>
                            <?php echo e(Form::text('email', 'Email',array('required' => 'required'))); ?>

                           
                            <?php if($errors->has('phone')): ?>
                                    <span class="invalid feedback" style="color:red" role="alert">
                                        <?php echo e($errors->first('phone')); ?>.
                                    </span>
                            <?php endif; ?>
                             <?php echo e(Form::text('phone', 'Phone')); ?>

                           
                            
                            <?php echo e(Form::textarea('message', 'Message',array('required' => 'required'))); ?>

                            <button class='primary-btn f-btn w-max mt-2' style='border: 0;'>Send</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>