


<?php $__env->startSection('content'); ?>


   <!-- Header -->
   <section class="programs">
      <div class="Coontact_us">
         <img alt="" src="<?php echo e(asset('assets')); ?>/img/videolib.png">
         <div class="Contact-header">
            <h2 class="mb-4">VIDEO LIBRARY</h2>
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
                  <p class="second_black">
                     <span class="f700">START SWEATING NOW!</span> You can choose from hundreds of classes and start dancing with
                     some of the best teachers from New York and around the world! Each teacher is
                     providing different series of 8 or more videos where they will break down the full
                     advanced choreography from video 8 into smaller sections of that choreography in video
                     1 to 7. Each video is a portion of the full choreography and is taught based on what
                     students have studied in the previous videos with the goal of learning the full choreography
                     from video 8, by learning from a foundation up. When video 9 and 10 are available, teachers
                     will add more advanced choreography to video 8.
                  </p>

                  <p class="second_black">
                     <span class="Atten_red">CLASS LEVELS:</span> <span class="f700">Beginner basic to intermediate level students:</span>
                     Start from video 1 and follow the order of the videos until video 8, 9 and 10.
                     <span class="f700">Intermediate and Advanced students:</span> video 3, 6, 7, 8, 9 & 10
                     The levels associated with each video here, will vary from every student
                     depending on the number of years practicing dance and many other factors,
                     therefore selecting any of the videos is every student’s personal choice and
                     at their own risk. No refund will be given for selecting the wrong video.
                  </p>

                  <p class="second_black">
                     <span class="Atten_red">NOTE:</span> Before taking any dance classes, students are advised to take
                     a warmup class video to
                     prepare their body for the strenuous dance class. Click teacher’s name for bio and class
                     description.
                  </p>

                  <p class="second_black f_italic">
                     <span class="f700">Attention:</span> Our platform and teachers cannot survive if you share your membership
                     login with anyone and allow them free access. Please keep your membership log-in
                     information for your use only.
                  </p>

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
                           function buildTree(&$elements, $parentId = 0) {
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
                              $video_category_org=video_category_org($video_category);
                              // echo "<pre>";
                              // print_r($video_category_org);
                              // die;
                              $video_category=buildTree($video_category); 
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
                                                   <div class="css-144472i"><?php echo e($library->sub_title); ?></div>
                                                   
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
                                                   <p class="VideoTitle pb-1"><?php echo e($library->library_name); ?>-<?php echo e($library->time); ?> </p>
                                                   <div class="VideoSubtitle mb-3">
                                                      <?php if(isset($trainer[$library->trainer_id]->trainer_name)): ?>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal<?php echo e($library->trainer_id); ?>"
                                                         class="Atten_red"><?php echo e($trainer[$library->trainer_id]->trainer_name); ?></a>
                                                      <?php endif; ?>   
                                                      </div>
                                                   <div>
                                                      <?php $parent_name=''; 
                                                      if(isset($library->category_id) && $library->category_id!=''){
                                                         $parent_id=$video_category_org[$library->category_id]->parent_id;
                                                         if($parent_id!=''){     
                                                            $parent_name=$video_category_org[$parent_id]->category_name;
                                                         }
                                                       } ?>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment"><?php echo e($parent_name); ?></span></p>
                                                      <p class="VideoLevelUp"><?php echo e($library->sub_title); ?> - 

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

                     <div class="dance_tab_menu" id="salsa_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 2 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 3 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 4 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 5 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 6 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 7 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 8 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="belly_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 2 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 3 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 4 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 5 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 6 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 7 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 8 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="brazil_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
                                 
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 2 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 3 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 4 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 5 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 6 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 7 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 8 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="cap_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
                                 
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 2 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 3 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 4 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 5 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 6 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 7 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 8 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="haitian_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
                                 
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 2- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 3- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 4- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 5- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 6- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 7- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 8- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="cuban_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
                                 
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 2- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 3- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 4- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 5- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 6- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 7- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 8- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="senegal_series_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 2 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 3 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 4 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 5 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 6 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 7 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 8 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="afrobeat_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 1 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 2 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 3 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 4 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 5 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 6 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 7 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 8 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="hop_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 2- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 3- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 4- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 5- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 6- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 7- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 8- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="dancehall_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 2- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 3- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 4- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 5- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 6- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 7- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 8- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="jazz_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 2- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 3- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 4- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 5- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 6- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 7- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 8- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="house_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="locking_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="breaking_serie_1">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 2</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 3</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 4</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 5</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 6</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 7</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">Video 8</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="afro_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba4.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROFIIT CARDIO WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m AFROFIIT
                                                            CARDIO WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Afrofiit Cardio Workout
                                                         To Afrobeats Music</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="afro_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba4.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROFIIT CARDIO WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m AFROFIIT
                                                            CARDIO WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">25m Video – SERIE 1: Afrofiit Cardio Workout
                                                         To Afrobeats Music</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>


                     <div class="dance_tab_menu" id="zumba_series">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_zumbas_hitomi.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ZUMBA</p>
                                                   <div class="VideoSubtitle mb-3">Hitomi Nozawa</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Video
                                                            ZUMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Hitomi N.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Zumba cardio Dance
                                                         workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="zumba_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_zumbas_hitomi.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ZUMBA</p>
                                                   <div class="VideoSubtitle mb-3">Hitomi Nozawa</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Video
                                                            ZUMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Hitomi N.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Zumba cardio Dance
                                                         workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="zumba_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_zumbas_hitomi.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ZUMBA</p>
                                                   <div class="VideoSubtitle mb-3">Hitomi Nozawa</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Video
                                                            ZUMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Hitomi N.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Zumba cardio Dance
                                                         workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="low_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOW-IMPACT WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m LOW-IMPACT
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Low-Impact Full-Body
                                                         Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="low_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOW-IMPACT WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m LOW-IMPACT
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Low-Impact Full-Body
                                                         Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="high_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika3.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIGH-IMPACT WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m HIGH-IMPACT
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: High-Impact Full-Body
                                                         Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="high_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika3.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIGH-IMPACT WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m HIGH-IMPACT
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: High-Impact Full-Body
                                                         Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="abs_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ABS-BACK WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m ABS-BACK
                                                            WORKOUT – SERIE 1</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Abs-Back Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="abs_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ABS-BACK WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m ABS-BACK
                                                            WORKOUT – SERIE 1</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Abs-Back Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="arms_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_yoga_bridget2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-block d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ARMS-BACK WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Bridget Bose 15min</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m ABS-BACK
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bridget B.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Abs-Back Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="world_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_AfricanDance_Djoniba.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">WORLD DANCE WARM-UP</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m WORLD DANCE
                                                            WARMUP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – Dance Warmup For World Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="world_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_AfricanDance_Djoniba.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">WORLD DANCE WARM-UP</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m WORLD DANCE
                                                            WARMUP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – Dance Warmup For World Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="urban_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba3.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">URBAN-DANCE WARM-UP</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m URBAN DANCE
                                                            WARMUP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Dance Warmup For Urban
                                                         Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="urban_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba3.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">URBAN-DANCE WARM-UP</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m URBAN DANCE
                                                            WARMUP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Dance Warmup For Urban
                                                         Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="yoga_series">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_yoga_bridget2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">YOGA</p>
                                                   <div class="VideoSubtitle mb-3">Bridget Bose</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO YOGA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bridget B.</a>
                                                      <p class="VideoLevelUp">15m Video - SERIE 1: Vinyasa Flow Yoga</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="yoga_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_yoga_bridget2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">YOGA</p>
                                                   <div class="VideoSubtitle mb-3">Bridget Bose</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO YOGA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bridget B.</a>
                                                      <p class="VideoLevelUp">15m Video - SERIE 1: Vinyasa Flow Yoga</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="yoga_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_yoga_bridget2.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">YOGA</p>
                                                   <div class="VideoSubtitle mb-3">Bridget Bose</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO YOGA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bridget B.</a>
                                                      <p class="VideoLevelUp">15m Video - SERIE 1: Vinyasa Flow Yoga</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="pilates_series">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_pilates_Agnes.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">PILATES</p>
                                                   <div class="VideoSubtitle mb-3">Agnes Koci</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO PILATES</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Agnes K</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Mat Pilates</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="pilates_15_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_pilates_Agnes.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">PILATES</p>
                                                   <div class="VideoSubtitle mb-3">Agnes Koci</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO PILATES</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Agnes K</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Mat Pilates</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     <div class="dance_tab_menu" id="pilates_25_min">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">

                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_pilates_Agnes.png" alt="">
                                                   <div class="css-144472i">Video 1</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <!-- <div class="css-144472i">28m</div> -->
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">PILATES</p>
                                                   <div class="VideoSubtitle mb-3">Agnes Koci</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO PILATES</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Agnes K</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Mat Pilates</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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
                     </div>

                     



                     <div class="dance_tab_menu">
                        <div class="infinite-scroll-component__outerdiv">
                           <div class="infinite-scroll-component " style="height: auto; overflow: visible;">
                              <div class="css-1lhw5nk">
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">WEST-AFRICAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m WEST-AFRICAN
                                                            DANCE: Kuku</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Kuku Dance from Guinea
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_salsa _andre.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SALSA</p>
                                                   <div class="VideoSubtitle mb-3">Andre Irving & Gabriela Quiles</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SALSA
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Andre I. & Gabriela Q.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Salsa On 2</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_belly-dance_mariyah.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BELLY DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Mariyah Jossick</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BELLY
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Mariyah J.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Classical Belly Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_samba _Dmalaika.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BRAZIL SAMBA</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BRAZIL
                                                            SAMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Brazilian Samba Roda</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_capoeira_omi.JPG" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CAPOEIRA</p>
                                                   <div class="VideoSubtitle mb-3">Omi Hill</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            CAPOEIRA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">OmiI H.</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Brazilian Capoeira Angola
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_haitian_alexandra.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HAITIAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Alexandra Jean-Joseph</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HAITIAN
                                                            DANCE: Ibo</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Alexandra J.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Ibo Dance from Haiti</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_ Cuban_Tony.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">CUBAN DANCE</p>
                                                   <div class="VideoSubtitle mb-3">Tony Domenech</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m CUBAN
                                                            Dance</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Tony D.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Elegua Orisha Dance from
                                                         Cuba</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_sabar_bakary.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">SENEGAL SABAR</p>
                                                   <div class="VideoSubtitle mb-3">Bakary Fall</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m SENEGAL
                                                            SABAR DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bakary F</a>
                                                      <p class="VideoLevelUp">Video 1 - SERIE 1: Senegal Sabar Dance
                                                         Kaolack</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_afrobeats_djoniba2.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROBEATS</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m AFROBEATS
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M.</a>
                                                      <p class="VideoLevelUp">Video 1 – SERIE 1: Afrobeats Urban Dance From
                                                         Africa</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_hiphop _carlos.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIP-HOP</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Kidd</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            HIP-HOP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos K.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Hip-Hop Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Dancehall _Korie.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor1.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">DANCEHALL</p>
                                                   <div class="VideoSubtitle mb-3">Korie Genius</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            DANCEHALL</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Korie G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Dancehall Urban Dance From
                                                         Jamaica</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_street-jazz_carlos2.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">STREET-JAZZ</p>
                                                   <div class="VideoSubtitle mb-3">Carlos Neto</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m
                                                            STREET-JAZZ</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Carlos N.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Street-Jazz Urban Dance
                                                         From USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_house _nene.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HOUSE</p>
                                                   <div class="VideoSubtitle mb-3">Nene Sylvestre</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m HOUSE</span>
                                                      </p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Nene S.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: House Urban Dance From USA
                                                      </p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_locking _Spex.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOCKING</p>
                                                   <div class="VideoSubtitle mb-3">Spex Abbiw</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m LOCKING
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Spex A.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Locking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_Breaking _Kwick.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">BREAKING</p>
                                                   <div class="VideoSubtitle mb-3">Kwick Steps & Roka Garcia</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">40m BREAK
                                                            DANCE</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Kwick D & Roka G.</a>
                                                      <p class="VideoLevelUp">Video 1- SERIE 1: Breaking Urban Dance From
                                                         USA</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_yoga_bridget2.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">YOGA</p>
                                                   <div class="VideoSubtitle mb-3">Bridget Bose</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO YOGA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bridget B.</a>
                                                      <p class="VideoLevelUp">15m Video - SERIE 1: Vinyasa Flow Yoga</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_pilates_Agnes.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">PILATES</p>
                                                   <div class="VideoSubtitle mb-3">Agnes Koci</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Express
                                                            VIDEO PILATES</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Agnes K</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Mat Pilates</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_zumbas_hitomi.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ZUMBA</p>
                                                   <div class="VideoSubtitle mb-3">Hitomi Nozawa</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m Video
                                                            ZUMBA</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Hitomi N.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Zumba cardio Dance
                                                         workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_AfricanDance_Djoniba.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">WORLD DANCE WARM-UP</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m WORLD DANCE
                                                            WARMUP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – Dance Warmup For World Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba3.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">URBAN-DANCE WARM-UP</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m URBAN DANCE
                                                            WARMUP</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Dance Warmup For Urban
                                                         Dance</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness_djoniba4.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">AFROFIIT CARDIO WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Djoniba Mouflet</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m AFROFIIT
                                                            CARDIO WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Djoniba M</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Afrofiit Cardio Workout
                                                         To Afrobeats Music</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika2.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">LOW-IMPACT WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m LOW-IMPACT
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Low-Impact Full-Body
                                                         Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika3.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">HIGH-IMPACT WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m HIGH-IMPACT
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: High-Impact Full-Body
                                                         Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_fitness _malaika.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ABS-BACK WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Malaika Anaya</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m ABS-BACK
                                                            WORKOUT – SERIE 1</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Malaika A</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Abs-Back Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
   
                                 <div>
                                    <div style="height: 100%;">
                                       <div class="css-1gam0lw" href="Instructor.html">
                                          <div class="VideoCard card">
                                             <div class="video-testimonial-block ">
                                                <div height="56.25" class="video-thumbnail video_lib_video">
                                                   <img src="<?php echo e(asset('assets')); ?>/img/new-classes/class_yoga_bridget2.png" alt="">
                                                   <div class="css-144472i">28m</div>
                                                   <div class="css-Like"><img src="<?php echo e(asset('assets')); ?>/img/Like.png"></div>
                                                   <a href="" class="play_video" data-toggle='modal'
                                                      data-target="#instructor_video_modal">
                                                      <i class="fa fa-play pl-1 play_btn d-block d-flex"></i>
                                                   </a>
                                                </div>
   
                                             </div>
                                             <div class="css-144472i">28m</div>
                                             <div class="VideoHeader p-3 d-flex align-top card-body">
                                                <div class="VideoAvatarContainer flex-shrink-0">
                                                   <img class="VideoAvatar" src="<?php echo e(asset('assets')); ?>/img/instructor2.jpg">
                                                </div>
                                                <div class="VideoDetails flex-grow-1 pl-3">
                                                   <p class="VideoTitle pb-1">ARMS-BACK WORKOUT</p>
                                                   <div class="VideoSubtitle mb-3">Bridget Bose 15min</div>
                                                   <div>
                                                      <p class="VideoLevelUp"><span class="VideoEquipment">15m ABS-BACK
                                                            WORKOUT</span></p>
                                                      <a href="#" data-toggle="modal" data-target="#instructor_modal"
                                                         class="Atten_red">Bridget B.</a>
                                                      <p class="VideoLevelUp">15m Video – SERIE 1: Abs-Back Workout</p>
                                                   </div>
                                                   <div class="pb-1">
                                                      <p class="VideoUploadedDate">February 2021</p>
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

<?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
   <div id="instructor_modal<?php echo e($library->trainer_id); ?>" class="modal fade instructor_modal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="row mb-3">
                 
                  <div class="col-12 col-md-4">
                      <?php if(isset($trainer[$library->trainer_id]->img)): ?>
                     <img src="<?php echo e(asset('uploads/'.$trainer[$library->trainer_id]->img)); ?>" alt="">
                     <?php endif; ?>
                  </div>
                  <div class="col-12 col-md-8">
                     <?php if(isset($trainer[$library->trainer_id]->trainer_name)): ?>
                     <p><?php echo e($trainer[$library->trainer_id]->trainer_name); ?></p>
                     <?php endif; ?>
                      <?php if(isset($trainer[$library->trainer_id]->trainer_details)): ?>
                      <?php echo $trainer[$library->trainer_id]->trainer_details ?>  
                     <?php endif; ?>
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
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="row mb-3">
                  <div class="col-12">
                     <div class="video-thumbnail video_lib_video">
                        <video  controls>
                          <source src="<?php echo e($library->library_url); ?>" type="video/mp4">
                          </video>
                        <a href="javascript:void(0)" class="play_video">
                           <i class="fa fa-play pl-1 play_btn"></i>
                           <i class="fa fa-pause pause_btn"></i>
                        </a>
                        <a href="javascript:void(0)" class="video_rent">Rent <?php echo e($library->amount); ?></a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('htmlblade/layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>