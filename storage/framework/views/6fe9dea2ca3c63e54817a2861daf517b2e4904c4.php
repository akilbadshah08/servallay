


<?php $__env->startSection('content'); ?>
	<section class="programs">
	   <div class="Coontact_us">
      <img alt="" src="<?php echo e(asset('assets/img')); ?>/banner_img.png">
      <div class="Contact-header text-center">
        <h2 class="mb-4">OUR PRODUCTS</h2> 
      </div>
    </div>
	</section>
	<!-----/End Header--->
	
<!------shop------->
<section class="classes-section">
    <div class="container">
        <div class="row">
             <div class="col-lg-9">
			      <div class="row">
				  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      <div class="col-lg-4">
					  <div  class="shop-imgtext">
					  <div class="shop-img">
					      <img class="sharp" src="<?php echo e(asset('uploads/'.$value->img)); ?>">
							<div class="shopdate">
								<span class="shopitem">Shop</span>
							</div>
							<div class="Shop_overlay">
								<div class="text"><a href="<?php echo e(url('productdetail/'. $value->slug)); ?>">Add Cart</a></div>
							  </div>
					   </div>
						<div class="shop-text text-center">
						    <h3><?php echo e($value->product_name); ?></h3>
							<h4><?php echo e($value->product_name); ?></h4>
							<h6><del>$<?php echo e(number_format($value->original_price,2)); ?></del>&nbsp; $<?php echo e(number_format($value->product_price,2)); ?> </h6>
						</div>
					  </div>
				  </div> 
				  
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  
			 </div>
			 <div class="row programs">
				       
				  
			 </div>
			 </div>
			 <div class="col-lg-3 filter">
			    <h4>FILTERS</h4>
				<!--<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">-->
				<!--   <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 2.43902%; width: 97.561%;"></div>-->
				<!--   <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 2.43902%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>-->
				<!--</div>-->
				<div class="price_slider_amount">
					
					
					<!--<div class="price_label">-->
					<!--Price: <span class="from">$12</span> — <span class="to">$53</span>-->
					<!--<button type="submit" class="button">Filter</button>-->
					<!--</div>-->
					<div class="clear"></div>
					 </div>
					 <div class="price_slider_amount">
					 <div class="input-holder clearfix">
					     <form method="get" action="<?php echo e(url('product')); ?>">
						<input type="search" class="search-field" placeholder="Search..." value="<?php echo e(isset($_GET['s'])?$_GET['s']:""); ?>"   name="s" title="Search for:">
						<button type="submit" id="searchsubmit">
						<span class="icon_search"><i class="fa fa-search" aria-hidden="true"></i></span></button>
						</form>
					</div>
					</div>
					<div class="price_slider_amount filter">
					    <h4>CATEGORY</h4>
						<ul class="product-categories">
						 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="cat-item"><a href="<?php echo e(url('category/'.$key)); ?>?"><?php echo e($value); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
			 
			 </div>
           
            
        
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>