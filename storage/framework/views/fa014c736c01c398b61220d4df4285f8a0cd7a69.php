<?php $__env->startSection('content'); ?>
	<section class="programs">
	   <div class="Coontact_us">
      <img alt="" src="<?php echo e(asset('assets/img')); ?>/banner_img.png">
      <div class="Contact-header text-center">
        <h2 class="mb-4">Our Product</h2> 
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
				      <div class="col-lg-4">
					  <div  class="shop-imgtext">
					  <div class="shop-img">
					      <img class="sharp" src="<?php echo e(asset('assets/img')); ?>/drum.jpg">
							<div class="shopdate">
								<span class="shopitem">Shop</span>
							</div>
							<div class="Shop_overlay">
								<div class="text"><a href="ShopDetail.html">Add Cart</a></div>
							  </div>
					   </div>
						<div class="shop-text text-center">
						    <h3>DRUM</h3>
							<h4>Musical Instrument</h4>
							<h6><del>$250</del>&nbsp; $160.00 </h6>
						</div>
					  </div>
				  </div> 
				       <div class="col-lg-4">
					  <div  class="shop-imgtext">
					  <div class="shop-img">
					      <img class="sharp" src="<?php echo e(asset('assets/img')); ?>/pant.jpg">
							<div class="shopdate">
								<span class="shopitem">Shop</span>
							</div>
							<div class="Shop_overlay">
								<div class="text"><a href="ShopDetail.html">Add Cart</a></div>
							  </div>
					   </div>
						<div class="shop-text text-center">
						    <h3>HAREM PANTS</h3>
							<h4>Clothing</h4>
							<h6><del>$45</del>&nbsp; $29.00 </h6>
						</div>
					  </div>
				  </div> 
				  <div class="col-lg-4">
					  <div  class="shop-imgtext">
					  <div class="shop-img">
					      <img class="sharp" src="<?php echo e(asset('assets/img')); ?>/hat.jpg">
							<div class="shopdate">
								<span class="shopitem">Shop</span>
							</div>
							<div class="Shop_overlay">
								<div class="text"><a href="ShopDetail.html">Add Cart</a></div>
							  </div>
					   </div>
						<div class="shop-text text-center">
						    <h3>HAT</h3>
							<h4>Head Wear</h4>
							<h6><del>$49</del>&nbsp; $29.00 </h6>
						</div>
					  </div>
				  </div> 
			 </div>
			 <div class="row programs">
				      <div class="col-lg-4">
					  <div  class="shop-imgtext">
					  <div class="shop-img">
					      <img class="sharp" src="<?php echo e(asset('assets/img')); ?>/straightpant.jpg">
							<div class="shopdate">
								<span class="shopitem">Shop</span>
							</div>
							<div class="Shop_overlay">
								<div class="text"><a href="ShopDetail.html">Add Cart</a></div>
							  </div>
					   </div>
						<div class="shop-text text-center">
						    <h3>STRAIGHT PANT</h3>
							<h4>Musical Instrument</h4>
							<h6><del>$250</del>&nbsp; $160.00 </h6>
						</div>
					  </div>
				  </div> 
				       
				  
			 </div>
			 </div>
			 <div class="col-lg-3 filter">
			    <h4>FILTER BY PRICE</h4>
				<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
				   <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 2.43902%; width: 97.561%;"></div>
				   <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 2.43902%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
				</div>
				<div class="price_slider_amount">
					
					
					<div class="price_label">
					Price: <span class="from">$12</span> — <span class="to">$53</span>
					<button type="submit" class="button">Filter</button>
					</div>
					<div class="clear"></div>
					 </div>
					 <div class="price_slider_amount">
					 <div class="input-holder clearfix">
						<input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:">
						<button type="submit" id="searchsubmit">
						<span class="icon_search"><i class="fa fa-search" aria-hidden="true"></i></span></button>
					</div>
					</div>
					<div class="price_slider_amount filter">
					    <h4>CATEGORY</h4>
						<ul class="product-categories">
						<li class="cat-item"><a href="#">Casual Clothes</a></li>
						<li class="cat-item"><a href="#">Dancewear</a></li>
						<li class="cat-item"><a href="#">Gym Clothes</a></li>
						<li class="cat-item"><a href="#">Hip Hop Clothing</a></li>
						<li class="cat-item"><a href="#">Performance Wear</a></li>
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