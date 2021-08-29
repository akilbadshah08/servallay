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



<body>

    <!-- Page Preloder -->

    <!--<div id="preloder">-->

    <!--    <div class="loader"></div>-->

    <!--</div>-->

    <div class="top1">

        <div class="container">

            <div class="row align-items-center">

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

                

                <?php if(Auth::user()): ?>

                <div class="col-sm-5">

                    <div class=" text-right login">

                        <a class="top_para text_trans_none" href="mailto:info@danscool.com"><?php echo e(Auth::user()->email); ?></a>

                    </div>



                </div>

                <?php endif; ?>





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

                        <li><a href="<?php echo e(url('myoption')); ?>" class="how_to_use">HOW TO USE</a></li>

                        <li><a href="<?php echo e(url('libraries')); ?>" class="video_lib">VIDEO CLASSES</a></li>

                        <li><a href="<?php echo e(url('programs')); ?>" class="programs">CHALLENGES</a></li>

                        <li><a href="<?php echo e(url('livevirtual')); ?>" class="live_virtual">ZOOM SCHEDULE</a></li>

                        <li><a href="<?php echo e(url('instudio')); ?>" class="in_studio">IN- STUDIO</a></li>

                        <li><a href="<?php echo e(url('product/black-shoes-1')); ?>" class="shop">SHOP</a></li>

                        <li><a href="<?php echo e(url('blogs')); ?>" class="blog">BLOG</a></li>

                        <li>

                            <?php if(Auth::guest()): ?>

                            <a href="<?php echo e(url('login')); ?>" class="my_profile">MY PROFILE</a>

                            <?php else: ?> 

                            <a href="<?php echo e(url('profile')); ?>" class="my_profile">MY PROFILE</a>

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

                                <ul>

                                    <li>

                                        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c1.png" alt="flickr1"></a>

                                    </li>

                                    <li>

                                        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c2.png" alt="flickr2"></a>

                                    </li>

                                    <li>

                                        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c3.png" alt="flickr3"></a>

                                    </li>

                                    <li>

                                        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c4.png" alt="flickr4"></a>

                                    </li>

                                    <li>

                                        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c5.png" alt="flickr5"></a>

                                    </li>

                                    <li>

                                        <a class="fancybox" href="#"><img src="<?php echo e(asset('assets/img')); ?>/c6.png" alt="flickr6"></a>

                                    </li>

                                </ul>

                            </div>

                        </div>



                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <div class="twitter-area">

                            <h3>Twitter Feed</h3>

                            <div class="twitter-list">

                                <ul>

                                    <li>

                                        <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome

                                            CREATIVE WordPress Theme? Esquise run even better.</p>

                                        <a href="#">http://t.co/0WWEMQEQ48</a>

                                        <p><span>3 Days ago</span></p>

                                    </li>

                                    <li>

                                        <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome

                                            CREATIVE WordPress Theme? Esquise run even better.</p>

                                        <a href="#">http://t.co/0WWEMQEQ48</a>

                                        <p><span>3 Days ago</span></p>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <div class="flickr-photos">

                            <h3>Upcoming events</h3>

                            <div class="flickr-list">

                                <p>Special workshops, free classes etc… </p>



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


    <?php echo $__env->yieldContent('pagescripts'); ?>

    

    </body>

    </html>

        