<?php $__env->startSection('content'); ?>
<script src="https://js.stripe.com/v3/"></script>

<style type="text/css">
  .field {
  border: 1px solid #d4d4d4;
  width: 100%;
}
.error.visible, .success.visible{
  display: block !important;
}
.fh {
    height: 41px;
}
label span {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 7px !important;
    display: inline-block;
}
.button {
    width: 100%;
    padding: 10px 4px;
    font-size: 18px;
    background: linear-gradient(to right, #eb3c5a 0%, #f67831 100%), linear-gradient(to right, #eb3c5a 0%, #f67831 100%);
    color: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
}
</style>
    <div class="container" style="padding: 100px 0;">
        <div class="row justify-content-center">
            <div class="col-sm-6 trial">
        <img src="<?php echo e(asset('assets/img/sign_up.jpg')); ?> ">
      </div>

            <div class="col-md-6">
                <div class="card-1">
                  <form>
                          <?php echo isset($charge->status) && $charge->status=='succeeded'?"<div class='alert alert-success'>Plan Activated Successfully</div>":""; ?>
                            <input type="hidden" name="token" />
                            <?php  #show success message and current running plan ?>
                            <div class="group row">
                              <label class='col-sm-12'>
                                <span>Select Plan</span><br>
                                <input type="radio" checked="" value="8200"  name="plan" class="plan" /> Annual($82.80)
                                <input type="radio"  value="2850" name="plan" class="plan" /> Annual($28.50)
                              </label>

                              <label class='col-sm-12'>
                                <span>Name on Card</span>
                                <input type="text" id="name_on_card" placeholder="Enter Name" name="name_on_card" class="field fh" />
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
                                <input id="postal-code" name="postal_code" class="field fh" placeholder="Regular field placeholder" />
                              </label>
                              
                              
                            <div class="outcome">
                              <div class="error" style="display: none;"></div>
                              <div class="success" style="display: none;">
                                Success! Your Stripe token is <span class="token"></span>
                              </div>
                            </div>
                            
                            </div>
                             <input type="submit"  class="button" />
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>


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
      var plan=$('.plan:checked').val();
      window.location.href="http://localhost/store/public/subscription?stripeToken="+result.token.id+"&plan="+plan;
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

document.querySelector('form').addEventListener('submit', function(e) {
  e.preventDefault();
//   document.getElementById('ids').style.display = "none";
  var options = {
    address_zip: document.getElementById('postal-code').value,
  };
  stripe.createToken(cardNumberElement, options).then(setOutcome);
});

</script>
 
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>