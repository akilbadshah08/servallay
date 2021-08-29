<?php $__env->startSection('content'); ?>

<style>
    .jwplayer{
            width: 100% !important;
    }
</style>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script src="https://cdn.jwplayer.com/libraries/2FjU2pRi.js"></script>

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

		<h3><?php echo e($program->sub_title); ?></h3><h4><?php echo e($program->program_name); ?>: All-Level</h4>

		

		</div>

		</div>

		<div class="col-lg-6">


			  <p class="first-para second_black"><?php echo $program->program_details ?>



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

						 <div style="height: 200px; overflow: hidden;" class='video_thumb_wrapper'>

							<div height="56.25" class="css-2g987">
							                            <a href="#" data-toggle="modal" data-target="#instructor_video_modal<?php echo e($library->id); ?>"

                                                         class="Atten_red"><img  src="<?php echo asset('uploads/'.$library->img); ?>">
                                                         
                                                         </a>
                                                         
                                                         </div>

						 </div>

						 <div class="css-144472i"><?php echo e($library->sub_title); ?></div>

						 <div class="VideoHeader p-3 d-flex align-top card-body">

							<div class="VideoAvatarContainer flex-shrink-0">

								<?php if(isset($trainers[$library->trainer_id]->img)): ?>

                                                   <img class="VideoAvatar" src="<?php echo e(asset('uploads/'.$trainers[$library->trainer_id]->img)); ?>">

                                                   <?php else: ?>

                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets/img/instructor1.jpg')); ?>">

                                                   <?php endif; ?>

							</div>

							<div class="VideoDetails flex-grow-1 pl-3">

							   <p class="VideoTitle pb-1"><?php echo e($library->library_name); ?></p>

							   <div class="VideoSubtitle">
                                
							   	 <?php if(isset($trainers[$library->trainer_id]->trainer_name)): ?>

                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal<?php echo e($library->trainer_id); ?>"

                                                         class="Atten_red"><?php echo e($trainers[$library->trainer_id]->trainer_name); ?></a>

                                                      <?php endif; ?>  
                                                      
                                                      							   	 <?php if(isset($trainers[$library->trainer_id_2]->trainer_name)): ?>

                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal<?php echo e($library->trainer_id_2); ?>"

                                                         class="Atten_red"><?php echo e($trainers[$library->trainer_id_2]->trainer_name); ?></a>

                                                      <?php endif; ?>  

							   </div>

							   <div>

								  <span class="VideoLevelUp"><?php echo e($program->sub_title); ?></span>

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



<?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

   <div id="instructor_modal<?php echo e($trainer->id); ?>" class="modal fade instructor_modal" role="dialog">

      <div class="modal-dialog">



         <!-- Modal content-->

         <div class="modal-content">

            <div class="modal-header">

               <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">

               <div class="row mb-3">

                 

                  <div class="col-12 col-md-4">

                      <?php if(isset($trainer->img)): ?>

                     <img src="<?php echo e(asset('uploads/'.$trainer->img)); ?>" alt="">

                     <?php endif; ?>

                  </div>

                  <div class="col-12 col-md-8 trainer_details">

                     <?php if(isset($trainer->trainer_name)): ?>

                     <p><?php echo e($trainer->trainer_name); ?></p>

                     <?php endif; ?>
                     
                      <?php if(isset($trainer->trainer_details)): ?>

                      <?php echo $trainer->trainer_details ?> 

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
                <h3><?php echo $library->sub_title ?></h3>  
               <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">

               <div class="row mb-3">

                  <div class="col-12">

                     <div class="video-thumbnail video_lib_video">

                         <?php if(
                         isset($fpay[$library->program_id]) && 
                         strtotime($fpay[$library->program_id]->created_at. ' + 365 days') > strtotime(date('Y-m-d')) 
                         ): ?>
                        <div id="video_container<?php echo e($library->id); ?>">Loading the player ...</div>
                            <script type="text/javascript">
                            jwplayer("video_container<?php echo e($library->id); ?>").setup({
                                flashplayer: "jwplayer/player.swf",
                                file: "<?php echo e($library->library_url); ?>",
                                height: 425,
                                provider: "rtmp",
                                streamer: "rtmp://s6b99lczhnef6.cloudfront.net/cfx/st",
                                width: 636
                            });
                            </script>
                          <?php else: ?>
                          <img  src="<?php echo asset('uploads/'.$library->img); ?>" >
                           <a href="javascript:void(0)" id="pay" data-lib="<?php echo e($library->program_id); ?>" data-amount="<?php echo e($program->amount); ?>" class="video_rent">Pay Rent $<?php echo e(number_format((float)$program->amount,2)); ?></a>

                          <?php endif; ?>

                        <!--<a href="javascript:void(0)" class="play_video">-->

                        <!--   <i class="fa fa-play pl-1 play_btn"></i>-->

                        <!--   <i class="fa fa-pause pause_btn"></i>-->

                        <!--</a>-->

                     </div>

                  </div>

               </div>

            </div>

         </div>



      </div>

   </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>

<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/main.js"></script>


   <script>
      $(document).ready(function () {

 $('.video_rent').click(function(){
            var vr=$(this);
            data={pro:$(this).data('lib'),'amount': $(this).data('amount')}
           $.ajax({
                  type: "POST",
                  dataType : 'json',
                  url: '<?php echo e(url("pay/")); ?>',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data:data,
                  success:function(result){
                    if(result=='success'){
                     location.reload();
                    }
                  }
                });    

         })
})
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>