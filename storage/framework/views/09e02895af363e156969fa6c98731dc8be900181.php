

<?php $__env->startSection('content'); ?>


<!-- Header -->
<section class="programs">
	<div class="Coontact_us">
		<img alt="" src="<?php echo e(asset('assets')); ?>/img/program.png">
		<div class="Contact-header">
			<h2 class="mb-4">PROGRAMS</h2>
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
					<p class="second_black">
						DANSCOOL offers different programs where students are guided toward
						specific goals within a specific time frame to help students challenge
						themselves. Programs are associated with zoom and in-studio classes by
						the teacher, to go over the performance choreographies and to attend rehearsals
						to go over what students studied on their own or to make corrections needed to
						achieve the goal set in the challenge. Email us to know of any other programs
						ideas you would like to join.
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
			<div class="owl-carousel owl-theme">
				<?php $__currentLoopData = $cvalue['programs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $pvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item css-3h7df7">
					<div class="images">
						<div class="css-1c5n2l3"><img src="<?php echo e(asset('uploads/'.$pvalue->img)); ?>" alt="obé" class="css-1sgt2zx"></div>
					</div>
					<div class="css-qthqyl"><?php echo e($pvalue->sub_title); ?></div>
					<div class="css-1bo1b2g">
						<p class="css-152cdys"><?php echo e($pvalue->program_name); ?></p>
						<div class="css-7klamj"><a href="<?php echo e(url('program_detail/'. $pvalue  ->slug )); ?>"><?php echo e($pvalue->total_days); ?> days/<?php echo e($pvalue->number_of_videos); ?> videos</a></div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	

			</div>

		</div>
	</div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<!--/Just getting programs----->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/program.js"></script>

<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/main.js"></script>
<script>
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
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


<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>