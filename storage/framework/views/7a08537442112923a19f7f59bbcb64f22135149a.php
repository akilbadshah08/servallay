<?php $__env->startSection('content'); ?>


  		<!----banner-Image----->
			<section class="programs">
			   <div class="Coontact_us">
			  <img alt="" src="<?php echo e(asset('assets')); ?>/img/option.jpg">
		   
			</div>
			</section>
	   <!-----/banner-image---->
<!--training programs----->
<section class="programs detail">
<div class="container">
		<div class="row">
		<div class="col-lg-6">
		<div class="section-title text-left">
		<h3>7-Day Rev-Up: Abs</h3>
		
		</div>
		</div>
		<div class="col-lg-6">
		      <h6>Welcome to the obé 7-Day Rev-Up: Abs!</h6>
			  <p class="first-para second_black">This series is designed to get those abs firing in a way that builds power 
			  progressively over the week. You’ll be standing tall with a strong core (and giving off major boss vibes) 
			  in no time.

			</p>
		</div>
		</div>
    <div class="row">
			
			
		</div>	
	</div>		
</section>
<!--/training programs----->
<!----videos----->
<section class="classes-section spad">
<div class="container">
       <div class="row">
	         <?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <div class="col-lg-4">
			    	<div style="height: 100%;">
					  <div class="VideoCard card">
						 <div style="height: 200px;
    overflow: hidden;
}">
							<div height="56.25" class="css-2g987"><a href="#" data-toggle="modal" data-target="#instructor_video_modal<?php echo e($library->id); ?>"
                                                         class="Atten_red"><img  src="<?php echo asset('uploads/'.$library->img); ?>"></a></div>
						 </div>
						 <div class="css-144472i"><?php echo e($library->sub_title); ?></div>
						 <div class="VideoHeader p-3 d-flex align-top card-body">
							<div class="VideoAvatarContainer flex-shrink-0"><
								<?php if(isset($trainer[$library->trainer_id]->img)): ?>
                                                   <img class="VideoAvatar" src="<?php echo e(asset('uploads/'.$trainer[$library->trainer_id]->img)); ?>">
                                                   <?php else: ?>
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets/img/instructor1.jpg')); ?>">
                                                   <?php endif; ?>
							</div>
							<div class="VideoDetails flex-grow-1 pl-3">
							   <p class="VideoTitle pb-1"><?php echo e($library->library_name); ?></p>
							   <div class="VideoSubtitle">
							   	 <?php if(isset($trainer[$library->trainer_id]->trainer_name)): ?>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal<?php echo e($library->trainer_id); ?>"
                                                         class="Atten_red"><?php echo e($trainer[$library->trainer_id]->trainer_name); ?></a>
                                                      <?php endif; ?>   
							   </div>
							   <div>
								  <span class="VideoLevelUp">yoga mat, no equipment used</span>
							   </div>
							   <div class="pb-1">
								  <p class="VideoUploadedDate"><?php echo e($library->program_time); ?></p>
							   </div>
							</div>
						 </div>
					  </div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			     
	   </div>
</div>

</section>

<?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
   <div id="instructor_modal<?php echo e($library->trainer_id); ?>" class="modal fade instructor_modal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="row mb-3">
                 
                  <div class="col-12 col-md-4">
                      <?php if(isset($trainer[$library->trainer_id]->img)): ?>
                     <img src="<?php echo e(asset('uploads/'.$trainer[$library->trainer_id]->img)); ?>" alt="">
                     <?php endif; ?>
                  </div>
                  <div class="col-12 col-md-8">
                     <?php if(isset($trainer[$library->trainer_id]->trainer_name)): ?>
                     <p><?php echo e($trainer[$library->trainer_id]->trainer_name); ?></p>
                     <?php endif; ?>
                      <?php if(isset($trainer[$library->trainer_id]->trainer_details)): ?>
                      <?php echo $trainer[$library->trainer_id]->trainer_details ?>  
                     <?php endif; ?>
                  </div>
               </div>
              
            </div>
         </div>

      </div>
   </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div id="instructor_video_modal<?php echo e($library->id); ?>" class="modal fade instructor_video_modal instructor_modal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="row mb-3">
                  <div class="col-12">
                     <div class="video-thumbnail video_lib_video">
                        <video  controls>
                          <source src="<?php echo e($library->library_url); ?>" type="video/mp4">
                          </video>
                        <a href="javascript:void(0)" class="play_video">
                           <i class="fa fa-play pl-1 play_btn"></i>
                           <i class="fa fa-pause pause_btn"></i>
                        </a>
                        <a href="javascript:void(0)" class="video_rent"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>