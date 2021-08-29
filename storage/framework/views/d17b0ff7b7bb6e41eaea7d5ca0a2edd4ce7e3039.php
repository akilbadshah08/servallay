<?php $__env->startSection('content'); ?>

    <!-- Header -->
	<section class="programs">
	   <div class="Coontact_us">
      <img alt="" src="img/banner_img.png">
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
             <div class="col-lg-6">
			 	 <img class="sharp" src="img/drum.jpg">
				<div class="shopdate">
				<span class="shopitem">Shop</span>
			</div>			
			 </div>
			 <div class="col-lg-6 filter">
			    <h3>DRUM</h3>
				<p class="price"><del><span class="woocommerce-Price-amount amount">
				<span class="woocommerce-Price-currencySymbol">$</span>160.00</span></del> <ins>
				<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>40.00
				</span></ins>
				</p>
				<div class="woocommerce-product-rating">
				    <a href="#" class="woocommerce-review-link" rel="nofollow">(<span class="count">2</span> customer reviews)</a>
					</div>
					<p class="first-para">On the other hand, we denounce with righteous indignation and dislike men who are 
					so&nbsp; demoralized by the charms of pleasure of the moment, so blinded by desire. Bzed by the charms of 
					pleasure of the moment.</p>
					  <a href="<?php echo e(route('basket.create', ['id' => $product->id,'quantity' => 1])); ?>">add to cart</a>
			
			 </div>
           
            
        
    </div>
</section>
 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>