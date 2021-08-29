

<?php $__env->startSection('content'); ?>


<!-- Header -->
<section class="programs">
	<div class="Coontact_us">
		<img alt="" src="<?php echo e(asset('assets')); ?>/img/program.png">
		<div class="Contact-header">
			<h2 class="mb-4">CHALLENGES</h2>
		</div>
	</div>
</section>
<!-----/End Header--->
<!----Danschooldata---->
<section class="my-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 colxs-12">
				<div>
				    <p class="second_black f700 mb-2 text-center">ONCE YOU FEEL CONFIDENT, PICK A CHALLENGE!</p>
					<p class="second_black">
						DANSCOOL offers different programs where students are guided toward
						specific goals within a specific time frame to help students challenge
						themselves. Programs are associated with zoom and in-studio classes by
						the teacher, to go over the performance choreographies and to attend rehearsals
						to go over what students studied on their own or to make corrections needed to
						achieve the goal set in the challenge. Email us to know of any other programs
						ideas you would like to join.
					</p>
					<p class="second_black">
					    Students are required to follow the order of the videos starting from 
					    video 1 until the last videos.  They must fully know each video before 
					    they can move on to the next video.
					</p>
					<p class="secon-para second_black f_italic"><span class="f700">"Attention:</span>
						Our platform and teachers cannot survive if you share your membership login with
						anyone and allow them free access. Please keep your membership log-in
						information for your use only.”
					</p>
					<p class="secon-para second_black"><span class="f700 Atten_red f700">Note:</span>
						Before taking any dance classes, students are advised to take a warmup class video
						to prepare their body for the strenuous dance class.
					</p>
				</div>
			</div>
		</div>
</section>
<!---/Danschooldata---->
<!--training programs----->

<?php $__currentLoopData = $n_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php 	//print_r($value); die; ?>
<section class="train">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="section-title text-left">
					<h3><?php echo e($cvalue['category_name']); ?></h3>

				</div>
			</div>
		</div>
		<div class="row">

            <div class='col-12'>
                <div class="owl-carousel owl-theme">
    				<?php $__currentLoopData = $cvalue['programs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $pvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<div class="item css-3h7df7">
    					<div class="images">
    						<div class="css-1c5n2l3"><img src="<?php echo e(asset('uploads/'.$pvalue->img)); ?>" alt="obé" class="css-1sgt2zx"></div>
    					</div>
    					<div class="css-qthqyl"><?php echo e($pvalue->sub_title); ?></div>
    					<div class="css-1bo1b2g">
    						<p class="css-152cdys"><?php echo e($pvalue->program_name); ?></p>
    						
    						<?php if(
                             isset($fpay[$pvalue->id]) && 
                             strtotime($fpay[$pvalue->id]->created_at. ' + 365 day') > strtotime(date('Y-m-d')) 
                             ): ?>
    						<div class="css-7klamj"><a href="<?php echo e(url('program_detail/'. $pvalue->slug )); ?>">
    				        <?php else: ?>
    				        <div class="css-7klamj"><a href="#" data-toggle="modal" data-target="#instructor_modal<?php echo e($pvalue->id); ?>">
    					    <?php endif; ?>
    					    <?php echo  $pvalue->count_title ?></a></div>
    					</div>
    				</div>

    				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    			</div>
            </div>

		</div>
	</div>
</section>

<?php $__currentLoopData = $cvalue['programs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $pvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="instructor_modal<?php echo e($pvalue->id); ?>" class="modal fade instructor_video_modal instructor_modal" role="dialog">
      <div class="modal-dialog">
             <!-- Modal content-->
    
             <div class="modal-content">
    
                <div class="modal-header">
    
                     <h3 style="text-transform:uppercase"><?php echo e($pvalue->sub_title); ?> challenges schedule:</h3>    
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
    
                <div class="modal-body">
    
                   <div class="row mb-3">
    
                      <div class="col-12">
    
                         <div class="video-thumbnail video_lib_video">
                             <b style="margin-bottom: 11px;display: block;color: red;">Note: If there is not a minimum of 25 students registered for the challenge, we will cancel it and give you a FULL refund.</b> 
                              <p><?php echo e($pvalue->short_desc); ?>. The schedule is as follow:</p>
                                <ul style='list-style-type: circle;margin-left: 41px;'>
                                <?php $__currentLoopData = $pvalue->videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vkey => $vvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($vvalue->sub_title); ?>: <?php echo e($vvalue->program_time); ?>-<?php echo e($vvalue->library_name); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <br>
                                <p>PLEASE CONFIRM THAT YOU FULLY UNDERSTAND THE TERMS BEFORE PAYMENT.  NO REFUNDS ONCE PAID. REFUNDS ONLY IF A MINIMUM OF 25 STUDENTS REGISTERED FOR THE CHALLENGE.</p>
                                <p>$<?php echo e(number_format((float)$pvalue->amount,2)); ?> rental fee gives access to all videos for the duration of the challenge.</p>
                               <div><a href="javascript:void(0)" id="pay" style="position: static;" data-url="<?php echo e(url('program_detail/'. $pvalue->slug )); ?>" data-lib="<?php echo e($pvalue->id); ?>" data-amount="<?php echo e($pvalue->amount); ?>" class="video_rent">Rental $<?php echo e(number_format((float)$pvalue->amount,2)); ?></a></div>
    
                             

                         </div>
    
                      </div>
    
                   </div>
    
                </div>
    
             </div>
    
    
    
          </div>
    
       </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<!--/Just getting programs----->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/program.js"></script>

<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/main.js"></script>
<script>
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
			loop: false,
			margin: 10,
			nav: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 4
				},
				1000: {
					items: 4
				}
			}
		});
	});
</script>

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
                     window.location.href=vr.data('url');
                    }
                  }
                });    

         })
})
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>