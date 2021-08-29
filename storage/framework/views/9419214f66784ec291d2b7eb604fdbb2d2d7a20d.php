


<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script src="https://cdn.jwplayer.com/libraries/2FjU2pRi.js"></script>

   <!-- Header -->
   <section class="programs">
      <div class="Coontact_us">
         <img alt="" src="<?php echo e(asset('assets')); ?>/img/videolib.png">
         <div class="Contact-header">
            <h2 class="mb-4">VIDEO CLASSES</h2>
         </div>
         <!-- <img src="<?php echo e(asset('assets')); ?>/img/woman4.png" alt="" class="cmn_banner_right demand_video_banner_girl"> -->
      </div>
   </section>
   <!-----/End Header--->

   <!------DEmand video------->
   <section class="classes-section ">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-xs-12">
               <div class="section-title mor-class">
                  <!-- <h2>VIDEO LIBRARY</h2> -->
               </div>
               <div>
                   <h4 class="second_black f700 text-center mb-3">HUNDREDS OF VIDEOS TO START DANCING & WORKING OUT NOW!</h4>
                   
                   <p class="second_black">
                       Each class style is taught through series of 8 or more videos. 
                       Each video from the series is taught based on what students 
                       have studied in the previous videos. Video 1, 2, 3, 4, 5, 6 are 
                       a portion of the full advanced routine of video 7, 8+. Video 9 
                       and 10, when available, are additional advanced moves added 
                       to video 8 routine.
                   </p>
                   
                   <p>
                       <span class='Atten_red'>CLASS LEVEL SUGGESTIONS:</span>
                       <span class='f700'>Beginner/basic:</span> Start from video 1.
                       <span class='f700'>Beginner/intermediate:</span> Start from video 3.
                       <span class='f700'>Intermediate:</span> Start from video 4.
                       <span class='f700'>IntermediateAdvanced:</span> Start from video 6. <br />
                       <span class='f700 Atten_red'>Video Content:</span> Video 3 is a combination of video 1 and 2.  Video 6 is a combination 
                       of video 4 and 5. Video 7 is video 1 to 6 combined
                   </p>
                   <p>
                       You are responsible to pick your correct level based on your experience.  
                       No refund will be given for selecting the wrong video. 
                   </p>
                   <p>
                       <span class='Atten_red'>NOTE:</span> Warmup before dancing.  Click Teacher’s Name For Bio & Class Descriptions.
                        To support your teacher’s income, 99 cents to Access Video 2,3,4,5,6,7,8,9,10 For 3 Days (72 Hrs).
                   </p>

                  <p class="second_black f_italic">
                     <span class="f700">Attention:</span> Our platform and teachers cannot survive 
                     if you share your membership login.  Please keep your membership log-in 
                     information for your use only.” 
                  </p>
                  
                  <p class="mb-4 f700 Atten_red text-center">VIDEO 1 OF EVERY STYLE IS FREE</p>

               </div>
            </div>
            <div class="css-9hdxjf w-100">
               <div class="css-hm8t3c">
                  <div class="css-1osnvnb" style="margin-top: 0px;">


                     <div class="FiltersContainer IsSticky" style="top: 65px;">
                        <div class="css-gg5sfu"></div>
                        <div class="FiltersContainerCollapse collapse show">

                           <?php
                           global $video_category_org;
                           $video_category_org=[]; 
                           function video_category_org(&$elements) {
                              global $video_category_org;
                              foreach ($elements as $element) {
                                 $video_category_org[$element->id]=$element;
                              }
                              return $video_category_org;
                           }
                           function buildTree(array &$elements, $parentId = 0) {
                               global $video_category_org;
                               $branch = array();
                               foreach ($elements as $element) {
                                   if ($element->parent_id == $parentId) {
                                       $children = buildTree($elements, $element->id);
                                       if ($children) {
                                           $element->children = $children;
                                       }
                                       $branch[$element->id] = $element;
                                       unset($elements[$element->id]);
                                   }
                               }
                               return $branch;
                           } ?>
                           <?php 
                              $video_category_org_2=video_category_org($video_category);
                              // echo "<pre>";
                              // print_r($video_category_org);
                              // die;
                              $video_category=buildTree($video_category_org_2); 
                           ?>
                           
                           <?php $__currentLoopData = $video_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                           <div class="FilterCategory box-shadow-lg card">
                              <div id="category_class-type-category" class="FilterCategoryHeader card-header">
                                    
                                    <div data-toggle="collapse" data-target="#<?php echo e($category->slug); ?>"
                                       class="FilterCategorySelect  p-0 btn btn-link">
                                       <?php echo e($category->category_name); ?>

                                       <div class="FilterIconVector "></div>
                                    </div>
                                    <div id="<?php echo e($category->slug); ?>" class="FilterCategoryItems collapse">
                                       <div class="css-6kg6bb">
                                           <?php if(isset($category->children)): ?>
                                           <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $category_c1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <div class="FilterCategorySelectOne" data-toggle="collapse"
                                             data-target="#<?php echo e($category_c1->slug); ?>"><?php echo e($category_c1->category_name); ?>

                                             <div class="FilterIconVector1 "></div>
                                          </div>
                                          <div id="<?php echo e($category_c1->slug); ?>" class="FilterCategoryItems1 collapse">
                                             <?php if(isset($category_c1->children)): ?>
                                             <?php $__currentLoopData = $category_c1->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $category_c2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <div class="css-6kg6bb">
                                                <div class="css-131hivf dance_tab <?php echo e($active==$category_c2->slug?'active':''); ?>" role="button" tabindex="0" data-id='wad_series_1'><a href='<?php echo e(url("libraries/".$category_c2->slug)); ?>'><?php echo e($category_c2->category_name); ?></a></div>
                                             </div>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             <?php endif; ?>
                                          </div>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          <?php endif; ?>
                                       </div>
                                    </div>

                              </div>
                           </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                
                        <div class="ClearFilters collapse">
                           <div class="css-gg5sfu"></div>
                           <div role="button" class="FiltersFooter btn btn-secondary">
                              <div class="css-q4obiv">Clear Filters</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="css-dbau1p">

                     <div class="dance_tab_menu show" id="wad_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
                                <?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                  <img  src="<?php echo asset('uploads/'.$library->img); ?>">
                                                   <div class="css-144472i Atten_red">Video <?php echo e($library->sub_title); ?></div>
                                                   
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal<?php echo e($library->id); ?>">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <?php //echo "<pre>"; print_r($trainer[$library->trainer_id]); die; ?>
                                             <!-- <div class="css-144472i">Video 1</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   
                                                   <?php if(isset($trainer[$library->trainer_id]->img)): ?>
                                                   <img class="VideoAvatar" src="<?php echo e(asset('uploads/'.$trainer[$library->trainer_id]->img)); ?>">
                                                   <?php else: ?>
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets/img/instructor1.jpg')); ?>">
                                                   <?php endif; ?>
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                    <div class='d-flex justify-content-between'>
                                                        <p class="VideoTitle pb-1"><?php echo e($library->library_name); ?> </p>
                                                        <p><?php echo e($library->time); ?> </p>
                                                    </div>
                                                   <div class="VideoSubtitle mb-3">
                                                      <?php if(isset($trainer[$library->trainer_id]->trainer_name)): ?>
                                                      <a href="#" data-toggle="modal" data-tar="instructor_modal<?php echo e($library->trainer_id); ?>" data-target="#instructor_modal<?php echo e($library->trainer_id); ?>"
                                                         class="Atten_red cdesc"><?php echo e($trainer[$library->trainer_id]->trainer_name); ?></a>
                                                      <?php endif; ?>
                                                      
                                                      <?php if(isset($trainer[$library->trainer_id_2]->trainer_name)): ?>
                                                      <span> & </span>
                                                      <a href="#" data-toggle="modal" data-tar="instructor_modal<?php echo e($library->trainer_id_2); ?>" data-target="#instructor_modal<?php echo e($library->trainer_id_2); ?>"
                                                         class="Atten_red cdesc"><?php echo e($trainer[$library->trainer_id_2]->trainer_name); ?></a>
                                                      <?php endif; ?>
                                                      </div>
                                                   <div>
                                                      <?php $parent_name=''; 
                                                      if(isset($library->category_id) && $library->category_id!=''){
                                                         $parent_id=$video_category_org[$library->category_id]->parent_id;
                                                         if($parent_id!=''){     
                                                            $parent_name=$video_category_org[$parent_id]->category_name;
                                                            $parent_desc=$video_category_org[$parent_id]->category_desc;
                                                            ?><div class='desc instructor_modal<?php echo e($library->trainer_id); ?> instructor_modal<?php echo e($library->trainer_id_2); ?>' style='display:none'>
                                                            <div class='innerdiv'><?php echo $parent_desc ?></div></div><?php
                                                         }
                                                       } ?>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment videoTitle"><?php echo e($parent_name); ?></span></p>
                                                      <p class="VideoLevelUp"> 

                                                         <?php echo e(isset($library->category_id) && $library->category_id!='' ?$video_category_org[$library->category_id]->category_name:''); ?>

                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate"><?php echo e(date('M, Y',strtotime($library->created_at))); ?></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
                              </div>
   
                           </div>
                        </div>
                     </div>





                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <!------/DEmand video------>
   <!-- Footer Section Begin -->

   <!-- Footer Section End -->

<?php $__currentLoopData = $trainer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
   <div id="instructor_modal<?php echo e($tra->id); ?>" class="modal fade instructor_modal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="instructor_info_row">
                 
                  <div class="col-12 col-md-4 trainer_img">
                      <?php if(isset($tra->img)): ?>
                     <img src="<?php echo e(asset('uploads/'.$tra->img)); ?>" alt="">
                     <?php endif; ?>
                  </div>
                  <div class="col-12 col-md-12 trainer_details">
                     <?php if(isset($tra->trainer_name)): ?>
                     <p class='trainer_name'><?php echo e($tra->trainer_name); ?></p>
                     <?php endif; ?>
                      <?php if(isset($tra->trainer_details)): ?>
                      <?php echo $tra->trainer_details ?>  
                     <?php endif; ?>
                  </div>
                  <div class="col-12 col-md-12 trainer_details cat_details">
                      </div>
               </div>
              
            </div>
         </div>

      </div>
   </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div id="instructor_video_modal<?php echo e($library->id); ?>" class="modal fade instructor_video_modal instructor_modal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
                <h3><?php echo $library->library_name ?>-Video <?php echo $library->sub_title ?></h3>  
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
               <div class="row mb-3">
                  <div class="col-12">
                     <div class="video-thumbnail video_lib_video">
                         <style>
                             .jwplayer {
                                width: 100% !important;
                            }
                         </style>
                        <?php if((isset($userDetails->plan) && strtotime($userDetails->plan_date) >= strtotime(date('Y-m-d')) && $library->sub_title==1) || (isset($fpay[$library->id]) && strtotime($fpay[$library->id]->created_at. ' + 3 days') > strtotime(date('Y-m-d')) )): ?>
                        <div id="video_container<?php echo e($library->id); ?>">Loading the player ...</div>
                            <script type="text/javascript">
                            jwplayer("video_container<?php echo e($library->id); ?>").setup({
                                flashplayer: "jwplayer/player.swf",
                                file: "<?php echo e($library->library_url); ?>",
                                height: 425,
                                provider: "rtmp",
                                streamer: "rtmp://s6b99lczhnef6.cloudfront.net/cfx/st",
                                width: 650
                            });
                            </script>
                        
                          <?php else: ?>
                          <img  src="<?php echo asset('uploads/'.$library->img); ?>" >
                           <a href="javascript:void(0)" data-lib="<?php echo e($library->id); ?>" data-amount="<?php echo e($library->amount); ?>" class="video_rent">72hrs Rental $<?php echo e(number_format((float)$library->amount,2)); ?></a>

                          <?php endif; ?>
                        <!--<a href="javascript:void(0)" class="play_video">-->
                        <!--   <i class="fa fa-play pl-1 play_btn"></i>-->
                        <!--   <i class="fa fa-pause pause_btn"></i>-->
                        <!--</a>-->
                     </div>
                  </div>
               </div>
               
            </div>
         </div>

      </div>
   </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('pagescripts'); ?>

<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/main.js"></script>


   <script>
      $(document).ready(function () {
        
        <?php if(isset($_GET["pid"])) { ?>
        $('#instructor_video_modal<?php echo e($_GET["pid"]); ?>').modal();
        <?php } ?>
        $('.cdesc').click(function(){
            var tar=$(this).data('tar');
            var desc=$('.'+tar+' .innerdiv').html();
            $('.cat_details').html(desc);
            
        })    
         $('.video_rent').click(function(){
            var vr=$(this);
            data={lib:$(this).data('lib'),'amount': $(this).data('amount')}
           $.ajax({
                  type: "POST",
                  dataType : 'json',
                  url: '<?php echo e(url("pay/")); ?>',
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data:data,
                  success:function(result){
                    if(result!='failed'){
                     window.location.href="?pid="+vr.data('lib'); 
                    }
                  }
                });    

         })
         $('.active').parent().parent().addClass("show");
         $('.active').parent().parent().parent().parent().addClass("show");
         $('.active').parent().parent().parent().parent().parent().addClass("show");
         $('.active').parent().parent().parent().parent().parent().parent().addClass("show");
         $(".FilterCategorySelect").click(function () {
            $(".FilterCategoryItems").each(function () {
               $(this).parent().removeClass("show");
               $(this).removeClass("show");
            });
            $(this).parent().addClass("show");
            $(this).addClass("show");
         });
         $(".FilterCategorySelectOne").click(function () {
            $(".FilterCategoryItems1").each(function () {
               $(this).parent().removeClass("show");
               $(this).removeClass("show");
            });
            $(this).parent().addClass("show");
            $(this).addClass("show");
         });

         $(".video-play").on('click', function (e) {
            e.preventDefault();
            var vidWrap = $(this).parent(),
               iframe = vidWrap.find('.video iframe'),
               iframeSrc = iframe.attr('src'),
               iframePlay = iframeSrc += "?autoplay=1";
            vidWrap.children('.video-thumbnail').fadeOut();
            vidWrap.children('.video-play').fadeOut();
            vidWrap.find('.video iframe').attr('src', iframePlay);


         });

      });
   </script>


<script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/program.js"></script>

<script>
    // $('.FilterCategoryHeader.show').click(function(){
    //     $(this).removeClass('show');
    //     $(this).find('.FilterCategorySelect').removeClass('show');
        
    // })
    
    // $('.FilterCategoryItems.collapse.show').click(function(){
    //     $(this).removeClass('show')
    // })
    // $('.FilterCategoryItems1.collapse.show').click(function(){
    //     $(this).removeClass('show')
    // })
    
    
</script>
























<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>