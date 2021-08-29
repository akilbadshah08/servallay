

<?php $__env->startSection('content'); ?>
<script src="https://js.stripe.com/v3/"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<style>
    .form-group {
        width: 50%;
        padding: 0 1%;
    }
    .btn.btn-danger{
        background: #dc3545;
    }
    .btn.btn-danger:hover{
        background: #c82333;
    }
    .btn.btn-primary{
        border-radius: .25rem;
    }
    
</style>   
    <!-- Header -->
    <section class="programs">
       <div class="Coontact_us">
      <img alt="" src="<?php echo e(asset('assets/img/banner_img.png')); ?>">
      <div class="Contact-header text-center">
        <h2 class="">Our Product</h2> 
      </div>
    </div>
    </section>
    <!-----/End Header--->

    <!-- Checkout Content -->
    <div class="container-fluid no-padding checkout-content" style="margin-top: 40px">
        <!-- Container -->
        <div class="container">
            
                <div class="row">
                    <div class='col-12'>
                        <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          </div><br />
                        <?php endif; ?>
                    </div> 
                    <form action="<?php echo e(route('cpay')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="section-padding"></div>

                        <!-- Order Summary -->
                        <!-- Payment Mode -->
                        <div class="col-md-12 payment-mode">
                            <div class='col-12'>
                                <div class="section-title">
                                    <h3>CONTACT AND INVOICE INFORMATION...</h3>
                                </div>
                            </div>

                            <div class="section-padding"></div>
                                <div class="container">

                                <?php //print_r($userDetails); ?>
                                <div class="row">
                                    <?php echo Form::bsText("name","First Name"); ?>

                                    <?php echo Form::bsText("last_name","Last Name"); ?>

                                    <?php echo Form::bsText("email","Email"); ?>

                                    <?php echo Form::bsText("m_phone","Mobile"); ?>

                                    <?php echo Form::bsText("city","City"); ?>

                                    <?php echo Form::bsText("state","State"); ?>

                                    <?php echo Form::bsText("country","Country"); ?>

                                    <?php echo Form::bsText("address","Address"); ?>

                                    <div class="form-group"></div>
                                    
                                    <div class='form-group'>
                                        <div class="text-center alert alert-info mb-0">
                                            <h4>TOTAL PRICE</h4>
                                            <span class="price">$<?php echo e(Cart::total()); ?>

                                            <small> </small></span>
                                        </div>
                                    </div>
                            <?php //echo "<pre>"; print_r($userDetails); ?>    
                             <?php if(isset($userDetails->stripe_id) && $userDetails->stripe_id!=''): ?>
                                <input name="stripe_id" id="stripe_id" value="<?php echo e($userDetails->stripe_id); ?>">
                             <?php else: ?>
                              <label class='col-sm-12'>
                                <span>Card number</span>
                                <div id="card-number-element" class="field"></div>
                              </label>
                              <label class='col-sm-12'>
                                <span>Expiration date</span>
                                <div id="card-expiry-element" class="field"></div>
                              </label>
                              <label class='col-sm-6'>
                                <span>CVC</span>
                                <div id="card-cvc-element" class="field"></div>
                              </label>
                              <div class="outcome">
                                    <div class="error" style="display: none;"></div>
                                    <div class="success" style="display: none;">
                                        Success! Your Stripe token is <span class="token"></span>
                                    </div>
                                </div>
                            <?php endif; ?>    
                            

                                    <?php echo Form::bsSubmit("Checkout"); ?>

    
    

                                </div>

                            </div>


                            </div>
                            <br><br>


                            <div class="section-padding"></div>
                        </div>
                        <!-- Order Summary /- -->

                        <!-- Payment Mode -->
                     
                    </form>
                </div>
        </div><!-- Container /- -->
    </div><!-- Checkout Content /- -->
  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('models'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>

 <script>
var stripe = Stripe('pk_test_Cix7INa8qYJruzkolgy2Ol20');
var elements = stripe.elements();

var style = {
  base: {
    iconColor: '#666EE8',
    color: '#31325F',
    lineHeight: '40px',
    fontWeight: 300,
    fontFamily: 'Helvetica Neue',
    fontSize: '15px',

    '::placeholder': {
      color: '#CFD7E0',
    },
  },
};

<?php if(!isset($userDetails->stripe_id) || $userDetails->stripe_id==''){ ?>
var cardNumberElement = elements.create('cardNumber', {
  style: style,
  placeholder: 'Custom card number placeholder',
});
cardNumberElement.mount('#card-number-element');

var cardExpiryElement = elements.create('cardExpiry', {
  style: style,
  placeholder: 'Custom expiry date placeholder',
});
cardExpiryElement.mount('#card-expiry-element');

var cardCvcElement = elements.create('cardCvc', {
  style: style,
  placeholder: 'Custom CVC placeholder',
});
cardCvcElement.mount('#card-cvc-element');


function setOutcome(result) {
  var successElement = document.querySelector('.success');
  var errorElement = document.querySelector('.error');
  successElement.classList.remove('visible');
  errorElement.classList.remove('visible');
  
  var rates = document.getElementsByName('plan');
var rate_value;
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        rate_value = rates[i].value;
    }
}

  if (result.token) {
//      alert(result.token.id);
 //echo isset($_GET['pro'])?$_GET['pro']:'price_1H834FHcrZfJH6iwVdMxgExk' 
      var ials="";

    alert("strip_account_not_exsit");
    
    submit_form_ajax(result.token.id);
    
//      window.location.href="https://danscool.com/store/public/subscription?stripeToken="+result.token.id+"&plan="+plan;
    // // In this example, we're simply displaying the token
    // successElement.querySelector('.token').textContent = result.token.id;
    // successElement.classList.add('visible');

    // In a real integration, you'd submit the form with the token to your backend server
    //var form = document.querySelector('form');
    //form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
    //form.submit();
  } else if (result.error) {
    //document.getElementById('ids').style.display = "block";
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}

cardNumberElement.on('change', function(event) {
  setOutcome(event);
});

<?php } ?>

$('.btn-danger').on('click', function(e) {
    e.preventDefault();
    <?php if(isset($userDetails->stripe_id) && $userDetails->stripe_id!=''){ ?>
        alert("strip_account_exsit");
        submit_form_ajax();
    <?php } else { ?>
      var options = {};
      stripe.createToken(cardNumberElement, options).then(setOutcome);        
    <?php } ?>

});


function submit_form_ajax(token=''){
    alert("submit form");
    var options={
        name: $('#name').val(),
        last_name: $('#last_name').val(),
        email: $('#email').val(),
        m_phone: $('#m_phone').val(),
        city: $('#city').val(),
        state: $('#state').val(),
        country: $('#country').val(),
        address: $('#address').val(),
        state: $('#state').val()
    }
    if(token!=''){
        options['stripeToken']=token;
    }
    if($('#stripe_id').val()!=undefined && $('#stripe_id').val()!='' ){
        options['stripe_id']=$('#stripe_id').val();
    }
    $.post("<?php echo e(url('successful')); ?>",options,function(response){
        
//        response=JSON.parse(response);
        if(response=='Unexpected Error' || response=='Transaction Fails'){
              alert(response);    
        } else{
            window.location.href="<?php echo e(url('orders')); ?>"
        }
              //window.location.href="<?php echo e(url('orders')); ?>";
          })
}
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>