<?php $__env->startSection('content'); ?>
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::model($userDetails, ['route' => ['profile.update', $userDetails->id], "method" =>  "put","files" => true]); ?>

                
                    <div class="ed_circle">
				       ED
				  </div>
				  <div class="ed_head text-center">
				  <div class="edit">
				      <a href="#">Change Profile Image</a>
				  </div>
				  </div>
				  <div class="weekle text-center">
				      <h6>Update Profile Information</h6>
				</div>

                <?php echo Form::bsText("phone","Phone"); ?>

                <?php echo Form::bsText("m_phone","Mobile Phone"); ?>

                <?php echo Form::bsText("address","Address"); ?>

                <?php echo Form::bsText("city","City"); ?>

                <?php echo Form::bsText("country","Country"); ?>

                <?php echo Form::bsText("zipcode","Zip Code"); ?>

                               <div class="form-check_btn">
                                <button>SAVE</button>
                            </div>                            
            </div>
        </div>
    </div>
    <style>
        form {
    width: 400px;
    margin: 62px auto;
    box-shadow: 0 0 6px 0 #d4d4d4;
    padding: 21PX;
}
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>