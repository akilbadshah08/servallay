

<?php $__env->startSection('content'); ?>
<!------Profile------->
<style>
    .hidden{
        display: none;
    }
    
    input#invite-btn {
    width: 100%;
    background: aliceblue;
    margin-top: 10px;
    color: #000;
}
</style>   
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <section class="classes-section programs">
        <div class="container">

            <!--START teacher-->
            <div class="row">
                <div class="col-sm-12 form-group">
                    <span class="invite-friend pull-right">
                        <button type="button" class="btn invite-btn" data-toggle="modal" data-target="#invite_friends">Invite a friend</button>
                    </span>
                </div>
                <div class="col-md-12">
                    <div class="ED_profile">
                        <div class="ed_circle">
                            <?php echo e(substr(Auth::user()->name,0,1)); ?><?php echo e(substr(Auth::user()->surname,0,1)); ?>

                        </div>
                        <div class="ed_head text-center">
                            <h4><?php echo e(Auth::user()->name); ?> </h4>
                            <h6>Member Since:<?php echo e(date('M Y',strtotime(Auth::user()->created_at))); ?></h6>
                            <div class="edit">
                                <a href="<?php echo e(url('profile/'.Auth::user()->id.'/edit')); ?>"> Edit Profile</a>
                            </div>
                        </div>
                        <div class="weekle">
                            <h6>Weekly class tracker</h6>
                            <span class="pull-right"><a
                                    href="<?php echo e(url('libraries_history')); ?>">Past class History</a></span>
                        </div>
                        <!-- <div class="not"> -->
                        <!-- <span class="Not"> -->
                        <!-- <button type="button" class="btn invite-btn">Not sure where to start?<br> -->
                        <!-- Checkout our price for you -->
                        <!-- </button> -->
                        <!-- </span> -->
                        <!-- </div> -->

                    </div>
                </div>
            </div>

        </div>
    </section>
    
    
       <div id="invite_friends" class="modal fade instructor_modal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <h5>Send Invitation</h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
               <div class="instructor_info_row">
                 
                                          <form action="#" class="invite-form" id="invite-form">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success csuccess hidden">Successfully Submitted</div>
                                    <div class="alert alert-danger cerror hidden">Please fill required Fields</div>
                                </div>

                                <div class="col-lg-12">

                                    <label for="email">E-mail</label>

                                    <input type="text" id="email" class="form-control" name="email">

                                </div>

                            </div>

                            <input type="submit" class="register-btn btn btn-success" id="invite-btn" value='Invite' >

                        </form>

               </div>
              
            </div>
         </div>

      </div>
   </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagescripts'); ?>
                    <script>
                    $(document).ready(function () {
                        $('#invite-btn').click(function(e){
                            e.preventDefault();
                           var data= $('#invite-form').serializeArray();
                           $('.csuccess').addClass('hidden');
                           $('.cerror').addClass('hidden');
                           $.ajax({
                              type: "GET",
                              dataType : 'json',
                              url: '<?php echo e(url("profile")); ?>',
                              headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              },
                              data:data,
                              success:function(result){
                                if(result=='success'){
                                    $('.csuccess').removeClass('hidden');
                                } else{
                                    $('.cerror').removeClass('hidden');
                                }
                              }
                            });
                        })
                    })
                    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>