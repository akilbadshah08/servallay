

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
			 	 <img class="sharp" src="<?php echo e(asset('uploads/'.$product->img)); ?>">
				<div class="shopdate">
				<span class="shopitem">Shop</span>
			</div>			
			 </div>
			 <div class="col-lg-6 filter">
			    <h3><?php echo $product->product_name ?></h3>
				<p class="price"><del><span class="woocommerce-Price-amount amount">
				<span class="woocommerce-Price-currencySymbol">$</span><?php echo e(number_format($product->original_price,2)); ?></span></del> <ins>
				<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo e(number_format($product->product_price,2)); ?>

				</span></ins>
				</p>
				<div class="woocommerce-product-rating">
				    <a href="#" class="woocommerce-review-link" rel="nofollow">(<span class="count">2</span> customer reviews)</a>
					</div>
					<p class="first-para"><?php echo $product->product_detail ?></p>
					<!--<p class="first-para">This Product comes in different sizes: Small, Medium, Large, X-Large, XXlarge</p>-->
					<form action="<?php echo e(route('basket.create')); ?>">
					    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
					    <input type="hidden" name="quantity" value="1">
					    <?php if($product->sizes!=''): ?>
					    <?php $sizes=explode(',',$product->sizes) ?>
                         <select class="form-control" name='size' required>
                                <option value="">Select Size</option>
                         
                             <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select> 
                          <?php endif; ?>
                          <br>
    					  <button class="btn btn-info" style="background: #EE3541">Add to cart</a>
    					
        					  
					    
					</form>
			
			 </div>
           
            
        
    </div>
</section>
 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>