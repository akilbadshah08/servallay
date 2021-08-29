

<?php $__env->startSection('content'); ?>
<script src="https://js.stripe.com/v3/"></script>

    <div class="container" style="padding: 100px 0;">
        <div class="row justify-content-center">
            <div class="col-sm-6 trial">
				<img src="<?php echo e(asset('assets/img/sign_up.jpg')); ?> ">
			</div>

            <div class="col-md-6">
                <div class="card-1">
                 
                    <div class="card-body-1">
                        <h2 class="text-play">GET STARTED NOW</h2>
                        <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text"
                                           class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                           name="name" placeholder="First Name" value="<?php echo e(old('name')); ?>" required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <input id="surname" type="text"
                                           class="form-control<?php echo e($errors->has('surname') ? ' is-invalid' : ''); ?>"
                                           name="surname" value="<?php echo e(old('surname')); ?>" placeholder="Last Name" required autofocus>

                                    <?php if($errors->has('surname')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('surname')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="email" type="email"
                                           class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                           name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password" type="password"
                                           class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                          placeholder="Password"  name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                            </div>
                          
                            <input type="hidden" name="token" />
                            <div class="group row">
                              <label class='col-sm-12'>
                                <span>Name on Card</span>
                                <input type="text" id="name_on_card" name="name_on_card" class="field" />
                              </label>
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
                              <label class='col-sm-6'>
                                <span>Postal code</span>
                                <input id="postal-code" name="postal_code" class="field" placeholder="Regular field placeholder" />
                              </label>
                              
                              
                            <div class="outcome">
                              <div class="error"></div>
                              <div class="success">
                                Success! Your Stripe token is <span class="token"></span>
                              </div>
                            </div>
                            
                            </div>

                           <div class="col-md-12">
                               <div class="form-check">
                                <label class="form-check-label">
                                    
                                    <input type="checkbox" class="form-check-input">
                                    <small  class="trem">Accept our <a href="TermsandCondition.html">Terms &amp; Conditions </a> And <a href="PrivacyPolicy.html">Privacy &amp; policies</a></small>
                                </label>
                              
                            </div>
                           </div>
                            <div class="col-md-12">
                               <div class="form-check_btn">
                                <button type="submit" class="btn btn-primary">NEXT</button>
                            </div>                            
                           </div>
                            <div class="col-md-12">
                               <div class="form-check_btn text-center">
                                ALREADY HAVE AN ACCOUNT? <a href="login.html">CLICK HERE</a> 
                              </div>
                          </div>
                          
                          
                            </div>

                          
                           
                        </form>
                        
                        <script>
var stripe = Stripe('pk_live_c6rgxDTa8KOOpUCJ5uqPWwN9');
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

      window.location.href="https://pixbrand.agency/store/public/strip_create?stripeToken="+result.token.id+"&price=250";
    // // In this example, we're simply displaying the token
    // successElement.querySelector('.token').textContent = result.token.id;
    // successElement.classList.add('visible');

    // In a real integration, you'd submit the form with the token to your backend server
    //var form = document.querySelector('form');
    //form.querySelector('input[name="token"]').setAttribute('value', result.token.id);
    //form.submit();
  } else if (result.error) {
	  document.getElementById('ids').style.display = "block";
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}

cardNumberElement.on('change', function(event) {
  setOutcome(event);
});

document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();
//	 document.getElementById('ids').style.display = "none";
  var options = {
    address_zip: document.getElementById('postal-code').value,
  };
  stripe.createToken(cardNumberElement, options).then(setOutcome);
});

</script>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>