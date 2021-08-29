<!DOCTYPE html>

<html lang="zxx">





<!-- Mirrored from 103.205.64.158/~nsystechlg/danscool/html/Instudio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 12:23:35 GMT -->



<head>

    <meta charset="UTF-8">

    <meta name="description" content="Gutim Template">

    <meta name="keywords" content="Gutim, unica, creative, html">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">



    <title><?php echo e("Fitness - ".request()->route()->getName()); ?></title>



    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"

        rel="stylesheet">



    <!-- Css Styles -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/magnific-popup.css" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/slicknav.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/style.css" type="text/css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css')); ?>/calender.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">



</head>

<style>
    body p{
        color: #000;
    }
    .phpdebugbar {
        display: none;
    }
    .workout_heading{
        background: #000;
        color: yellow;
        padding: 10px;
        margin-bottom: 20px;
    }
    body{
        display: block !important;
        top: 0px !important;
    }
    body .footer-area p{
        color: #b3b3b3;
    }
    .instructor_info_row{
        display: block;
    }
    .instructor_info_row .trainer_img{
        float: left;
    }
    .instructor_info_row .trainer_details p{
        margin-left: 0px !important;
        margin-right: 0px !important;
        font-size: 14px;
        line-height: 1.8;
    }
    .instructor_info_row .trainer_name{
        font-weight: 700;
    }
    .play_video.video_played{
        opacity: 0;
        transition: all 0.3s linear;
    }
    .video_lib_video:hover .play_video.video_played{
        opacity: 1;
    } 
    .videoTitle{
        text-transform: capitalize;
    }
    section.train{
        margin-bottom: 50px;
    }
    .classes-section.spad .row>div.col-lg-4{
        padding: 15px;
    }
    body .trainer_details p{
        margin-left: 0px !important;
        margin-right: 0px !important;
    }
    
    .login a {
        transition: all 0.3s linear;
        margin-top: 35px;
        display: inline-block;
    }
    span#google_translate_element {
        position: absolute;
        right: 0;
    }
    .goog-te-banner-frame.skiptranslate{
        display: none !important;
    }
    body .Blogger .card-img img{
        height: auto !important;
    }
    .flag_lang_img{
        position: absolute;
        right: 155px;
        top: 0px;
    }
    .nav-menu .mainmenu ul li ul {
        position: absolute;
        background: rgba(0,0,0,0.5);
        padding: 10px;
        width: 147px;
        top: 52px;
        display: none;
    }
    
    .nav-menu .mainmenu ul li {
        position: relative;
        padding: 16px 0;
    }
    
    .nav-menu .mainmenu ul li ul li {
        display: block;
        padding: 3px;
    }
    
    ul.dancenav {
        margin: 0;
    }
    
    .nav-menu .mainmenu ul li:hover ul {
        display: block;
    }
    .nav-menu .mainmenu ul li ul li a {
        padding: 0;
    }
    
</style>



<body>

    <!-- Page Preloder -->

    <!--<div id="preloder">-->

    <!--    <div class="loader"></div>-->

    <!--</div>-->

    <div class="top1">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-sm-12 col-xs-12">

                    <div>
                        <span id="google_translate_element"></span>

                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                            }
                        </script>
                    
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
                    
                    <div class="flag_lang_img">
                        <a href="<?php echo e(url('basket')); ?>"><i class="fa fa-cart-plus"></i></a>
                        <img src="<?php echo e(asset('assets/img')); ?>/flags.png"></img>
                    </div>
                    
                </div>
                
                <div class="col-sm-5 col-xs-12 login">

                <?php if(Auth::guest()): ?>

            

                    <a href="<?php echo e(url('login')); ?>">Login </a>

                    <a href="<?php echo e(url('register')); ?>">Register</a>

                <?php else: ?>

                    <a href="<?php echo e(url('logout')); ?>">Logout </a>

                

                <?php endif; ?>


                </div>

                

                <div class="col-sm-2 text-center logo">

                    <a href="<?php echo e(url('')); ?>">

                        <img src="<?php echo e(asset('assets/img')); ?>/blog/logo.png" alt="logo">



                    </a>

                </div>

                

                <div class="col-sm-5">

                <?php if(Auth::user()): ?>

                    <div class=" text-right login">

                        <a class="top_para text_trans_none" href="mailto:info@danscool.com"><?php echo e(Auth::user()->email); ?></a>

                    </div>




                <?php endif; ?>

         
                            </div>



            </div>

        </div>

    </div>

    <header class="header-section" id="banner">



        <div class="container-fluid menu">



            <div class="nav-menu">



                <nav class="mainmenu mobile-menu">



                    <a href="<?php echo e(url('')); ?>" class="header_logo">

                        <img src="<?php echo e(asset('assets/img')); ?>/Danscool-Flat-Logo-yellow.png" alt="logo">

                    </a>



                    <ul class="dancenav">
                            <?php $uname=\Route::currentRouteName() ?>
                        <li><a href="<?php echo e(url('myoption')); ?>" class="how_to_use <?php echo e($uname=='myoption'?'active':''); ?>">HOW TO USE</a></li>

                        <li><a href="<?php echo e(url('libraries')); ?>" class="video_lib <?php echo e($uname=='library'?'active':''); ?>">VIDEO CLASSES</a></li>

                        <li><a href="<?php echo e(url('programs')); ?>" class="programs <?php echo e($uname=='program' || $uname=='program_detail'?'active':''); ?>">CHALLENGES</a></li>

                        <li><a href="<?php echo e(url('livevirtual')); ?>" class="live_virtual <?php echo e($uname=='livevirtual'?'active':''); ?>">ZOOM SCHEDULE</a></li>

                        <li><a href="<?php echo e(url('instudio')); ?>" class="in_studio <?php echo e($uname=='instudio'?'active':''); ?>">IN- STUDIO</a></li>

                        <li><a href="<?php echo e(url('product')); ?>" class="shop <?php echo e($uname=='product'?'active':''); ?>">SHOP</a></li>

                        <li><a href="<?php echo e(url('blogs')); ?>" class="blog <?php echo e($uname=='blog'?'active':''); ?>">BLOG</a></li>

                        <li>

                            <?php if(Auth::guest()): ?>

                            <a href="<?php echo e(url('login')); ?>" class="my_profile <?php echo e($uname=='profile'?'active':''); ?>">MY ACCOUNT</a>

                            <?php else: ?> 

                            <a href="" class="my_profile <?php echo e($uname=='profile'?'active':''); ?>">MY ACCOUNT</a>
                            <ul>
                                <li><a href="<?php echo e(url('profile')); ?>" class="my_profile <?php echo e($uname=='profile'?'active':''); ?>">My Profile</a></li>
                                <li><a href="<?php echo e(url('orders')); ?>" class="my_profile <?php echo e($uname=='profile'?'active':''); ?>">MY Orders</a></li>

                                <li>
                            </ul>

                            <?php endif; ?>

                            

                            </li>

                        <li><a href="<?php echo e(url('contact')); ?>" class="contact_us">CONTACT US</a></li>

                    </ul>

                </nav>



            </div>

            <div id="mobile-menu-wrap"></div>

        </div>

    </header>

    <!-- Header End -->

    

    <?php echo $__env->yieldContent('content'); ?>

     

    <footer class="footer-section">

        <div class="footer-area">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <div class="about-company">

                            <h3>About</h3>

                            <p>Our Dance school online is designed by master dance teachers, whose goals are to give our

                                members more options to learn better and faster.</p>

                            <div class="flickr-list">



                                <h3>Instagram</h3>
                                
                                <div data-mc-src="c60344cc-44e6-4bb8-92bb-ed55a0846fd2#instagram"></div>
                                
                                

                                <!--<ul>-->

                                <!--    <li>-->

                                <!--        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c1.png" alt="flickr1"></a>-->

                                <!--    </li>-->

                                <!--    <li>-->

                                <!--        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c2.png" alt="flickr2"></a>-->

                                <!--    </li>-->

                                <!--    <li>-->

                                <!--        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c3.png" alt="flickr3"></a>-->

                                <!--    </li>-->

                                <!--    <li>-->

                                <!--        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c4.png" alt="flickr4"></a>-->

                                <!--    </li>-->

                                <!--    <li>-->

                                <!--        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c5.png" alt="flickr5"></a>-->

                                <!--    </li>-->

                                <!--    <li>-->

                                <!--        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c6.png" alt="flickr6"></a>-->

                                <!--    </li>-->

                                <!--</ul>-->

                            </div>

                        </div>



                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <div class="twitter-area">

                            <h3>Twitter Feed</h3>

                            <div class="twitter-list">

                                <ul>

                                    <li>

                                        <!--<p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome-->

                                        <!--    CREATIVE WordPress Theme? Esquise run even better.-->
                                        <!--</p>-->

                                        <!--<a href="#">http://t.co/0WWEMQEQ48</a>-->
                                        <a class="twitter-timeline" data-height="300" data-theme="dark" href="https://twitter.com/DanscoolOnline?ref_src=twsrc%5Etfw">Tweets by DanscoolOnline</a> 
                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                                        <!--<p><span>3 Days ago</span></p>-->

                                    </li>

                                    <!--<li>-->

                                    <!--    <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome-->

                                    <!--        CREATIVE WordPress Theme? Esquise run even better.</p>-->

                                    <!--    <a href="#">http://t.co/0WWEMQEQ48</a>-->

                                    <!--    <p><span>3 Days ago</span></p>-->

                                    <!--</li>-->

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <div class="flickr-photos">

                            <h3>Upcoming events</h3>

                            <div class="flickr-list">

                                <ul>
                                    <li><p>14 Aug 2021 - Launching Party!</p></li>
                                    <li><p>16-21 Aug 2021- Launching Week!</p></li>
                                    <li><p>23-28 Aug 2021 - Launching Week2!</p></li>
                                </ul>



                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <div class="corporate-office">

                            <h3>Corporate Office</h3>

                            <div class="corporate-address">

                                <ul>

                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <span>infodanscool@gmail.com

                                            &nbsp;

                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@danscool.com<br></span></li>

                                    <li><i class="fa fa-fax" aria-hidden="true"></i>P.O Box 1074 <span>New York NY

                                            10276</span><br>

                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;126 East 13th Street NYC 10003</li>

                                    <!--                                        <li><i class="fa fa-fax" aria-hidden="true"></i>Fax : (123) 4657890</li>-->

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </footer>

    

    <?php echo $__env->yieldContent('js'); ?>

    <?php echo $__env->yieldContent('models'); ?>

        

            <!-- Js Plugins -->

    <script src="<?php echo e(asset('assets/js')); ?>/jquery-3.3.1.min.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/bootstrap.min.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/slick.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/owl.carousel.min.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/header.js"></script>

    <script type='text/javascript' src="<?php echo e(asset('assets/js')); ?>/program.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/jquery.magnific-popup.min.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/mixitup.min.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/jquery.slicknav.js"></script>

    <script src="<?php echo e(asset('assets/js')); ?>/main.js"></script>
    
    <script src="https://cdn2.woxo.tech/a.js#60e820f5490fb600158bff4b" async data-usrc>
    </script>


    <?php echo $__env->yieldContent('pagescripts'); ?>

    

    </body>

    </html>

        