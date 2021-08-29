<?php $__env->startSection('content'); ?>

    <div class="container" style="padding: 100px 0;">
        <div class="row justify-content-center">
            <div class="col-sm-6 trial">
				<img src="<?php echo e(asset('assets/img/sign_up.jpg')); ?> ">
			</div>

            <div class="col-md-6">
                <div class="card-1">
                 
                    <div class="card-body-1">
                        <h2 class="text-play">GET STARTED NOW</h2>
                        <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text"
                                           class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                           name="name" placeholder="First Name" value="<?php echo e(old('name')); ?>" required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <input id="surname" type="text"
                                           class="form-control<?php echo e($errors->has('surname') ? ' is-invalid' : ''); ?>"
                                           name="surname" value="<?php echo e(old('surname')); ?>" placeholder="Last Name" required autofocus>

                                    <?php if($errors->has('surname')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('surname')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="email" type="email"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password" type="password"
                                           class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                          placeholder="Password"  name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                            </div>
                          


                           <div class="col-md-12">
                               <div class="form-check">
                                <label class="form-check-label">
                                    
                                    <input type="checkbox" class="form-check-input">
                                    <small  class="trem">Accept our <a href="TermsandCondition.html">Terms &amp; Conditions </a> And <a href="PrivacyPolicy.html">Privacy &amp; policies</a></small>
                                </label>
                              
                            </div>
                           </div>
                            <div class="col-md-12">
                               <div class="form-check_btn">
                                <button type="submit" class="btn btn-primary">NEXT</button>
                            </div>                            
                           </div>
                            <div class="col-md-12">
                               <div class="form-check_btn text-center">
                                ALREADY HAVE AN ACCOUNT? <a href="login.html">CLICK HERE</a> 
                              </div>
                          </div>
                          
                          
                            </div>

                          
                           
                        </form>
           
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>