<!DOCTYPE html>

<html lang="en">

<head>

    <title>Project-Admin </title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/bootstrap4/bootstrap.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-select.min.css')); ?>">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet"

          type="text/css">

    <link href="<?php echo e(asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet"

          type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">

    <link rel="stylesheet" type="text/css"

          href="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/main_styles.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/responsive.css')); ?>">

    <link href="<?php echo e(asset("assets/styles/toastr.min.css")); ?>" rel="stylesheet">





    <?php echo $__env->yieldContent('css'); ?>



    <script>

        window.csrfToken = "<?php echo e(csrf_token()); ?>"

    </script>

</head>



<body data-status="<?php echo e(Session::get("status")); ?>">



<div class="super_container">



    <!-- Header -->

    <style>

        li.account:hover ul{

    display:block;

}

li.account ul {

    display:none;

    position: absolute;

    width: 250px;

    top:45px;

    z-index:1

}



li.account ul li {

    float: left;

    display: block;

    width: 100%;

    text-align: left;

}



li.account {

    position: relative;

}



li.account ul li i {

    display: none;

}

    </style>



    <div class="fs_menu_overlay"></div>

    <div class="hamburger_menu">

        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="hamburger_menu_content text-right">

            <ul class="menu_top_nav">

                <li class="menu_item"><a href="<?php echo e(route('home')); ?>">HOMEPAGE</a></li>

             




                <?php if(Auth::guest()): ?>

                    <li class="menu_item">

                        <a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>

                            Sign In</a>

                    </li>

                    <li class="menu_item">

                        <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus"

                                                             aria-hidden="true"></i> Register</a>

                    </li>

                <?php else: ?>

                    <li class="menu_item has-children">

                        <a href="#">

                            <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?>


                            <i class="fa fa-angle-down"></i>

                        </a>



                        <ul class="menu_selection">

                            <?php if(Auth::user()->isItAuthorized("admin")): ?>

                                <li><b>ADMIN</b></li>

                                <li><a href="<?php echo e(url('/admin-users')); ?>">Users</a></li>

                                <li><a href="<?php echo e(url('/admin-category')); ?>">Category</a></li>

                                <li><a href="<?php echo e(url('/admin-products')); ?>">Products</a>

                                </li>

                                <li><a href="<?php echo e(url('/admin-orders')); ?>">Orders</a></li>

                            <?php endif; ?>



                            <?php if(Auth::user()): ?>

                                <li><b>USER</b></li>

                                <li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profile</a></li>

                                <li><a href="<?php echo e(url('/orders')); ?>"><i class="fa fa-btn fa-list-alt"></i>Orders</a></li>

                            <?php endif; ?>

                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a>

                            </li>

                        </ul>





                    </li>

                <?php endif; ?>





            </ul>

        </div>

    </div>







    <header class="header trans_300">



        <!-- Top Navigation -->



        <div class="top_nav">

            <div class="container">

                <div class="row">

                    

                    <div class="col-md-12 text-left">

                        <div class="top_nav_right">



                            <ul class="top_nav_menu">



                                <!-- Currency / Language / My Account -->

                                <?php if(Auth::guest()): ?>

                                    <li class="language">

                                        <a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>

                                            Sign In</a>

                                    </li>

                                    <li class="language">

                                        <a href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus"

                                                                             aria-hidden="true"></i> Register</a>

                                    </li>

                                <?php else: ?>

                                            <?php if(Auth::user()->isItAuthorized("admin")): ?>

                                            

                                            <li  class="account"><a style="    font-size: 27px;

    margin-right: 55px;

" href="<?php echo e(url('/admin-users')); ?>">Servalley</a>

                                                </li>

                                                <li class="account"><a href="<?php echo e(url('/admin-users')); ?>"><i

                                                                class="fa fa-btn fa-users"></i>Users</a>

                                                </li>

                                                <li class="account"><a href="<?php echo e(url('/admin-providers')); ?>"><i
                                                                class="fa fa-btn fa-cubes"></i>Provider Services </a>
                                                </li>
                                                <li class="account"><a href="<?php echo e(url('/admin-category')); ?>"><i

                                                                class="fa fa-btn fa-users"></i>Category</a>

                                                </li>

<!-- 

                                                <li class="account"><a href="<?php echo e(url('/admin-products')); ?>"><i

                                                                class="fa fa-btn fa-cubes"></i>Products</a>

                                                                <ul>

                                                                <li class="account"><a href="<?php echo e(url('/admin-category')); ?>"><i

                                                                class="fa fa-btn fa-list-ul"></i>Product Category</a></li>

                                                                </ul>

                                                </li>

                                                <li class="account"><a href="<?php echo e(url('/admin-librarys')); ?>"><i

                                                                class="fa fa-btn fa-cubes"></i>Librarys</a>

                                                </li>

                                                <li class="account"><a href="<?php echo e(url('/admin-programs')); ?>"><i

                                                                class="fa fa-btn fa-cubes"></i>Programs</a>

                                                                <ul>

                                                                    <li class="account"><a href="<?php echo e(url('/admin-program-videos')); ?>"><i

                                                                class="fa fa-btn fa-cubes"></i>Programs Videos</a>

                                                                    </li>

                                                                </ul>

                                                </li>

                                                <li class="account"><a href="#"><i

                                                                class="fa fa-btn fa-cubes"></i>Transactions</a>

                                                                

                                                                 <ul>

                                                                    <li class="account"><a href="<?php echo e(url('/admin-orders')); ?>"><i

                                                                class="fa fa-btn fa-cubes"></i>Shop Orders</a>

                                                                    </li>

                                                                    <li class="account"><a href="<?php echo e(url('/admin-payment')); ?>"><i

                                                                class="fa fa-btn fa-cubes"></i>Bookings</a>

                                                                    </li>

                                                                </ul>

                                                </li>
 -->
                                                

                                            <?php endif; ?>



                                            <?php if(Auth::user()): ?>

                                                <!--<li><b>USER</b></li>-->

                                                <!--<li><a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-btn fa-user"></i>Profile</a>-->

                                                <!--</li>-->

                                                <!--<li><a href="#"><i class="fa fa-btn fa-list-alt"></i>Orders</a>-->

                                                <!--</li>-->

                                            <?php endif; ?>

                                            <li class="account"><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a>

                                            </li>

                                <?php endif; ?>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </header>



<?php echo $__env->yieldContent('content'); ?>



<!-- Footer -->



    <!--<footer class="footer">-->

    <!--    <div class="container">-->

    <!--        <div class="row">-->

    <!--            <div class="col-lg-6"></div>-->

    <!--            <div class="col-lg-6">-->

    <!--                <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">-->

    <!--                    <ul>-->

    <!--                        <li><a href="http://www.facebook.com/anil.ozmen.35"><i class="fa fa-facebook"-->

    <!--                                                                               aria-hidden="true"></i></a>-->

    <!--                        </li>-->

    <!--                        <li><a href="http://www.twitter.com/Anilozmenn"><i class="fa fa-twitter"-->

    <!--                                                                           aria-hidden="true"></i></a>-->

    <!--                        </li>-->

    <!--                        <li><a href="http://www.instagram.com/anilozmen"><i class="fa fa-instagram"-->

    <!--                                                                            aria-hidden="true"></i></a></li>-->

    <!--                        <li><a href="http://www.github.com/anilozmen"><i class="fa fa-github"-->

    <!--                                                                         aria-hidden="true"></i></a></li>-->

    <!--                        <li><a href="http://www.gitlab.com/anilozmen"><i class="fa fa-gitlab"-->

    <!--                                                                         aria-hidden="true"></i></a></li>-->

    <!--                        <li><a href="@anilozmen35"><i class="fa fa-skype" aria-hidden="true"></i></a></li>-->

    <!--                    </ul>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--        </div>-->

    <!--        <div class="row">-->

    <!--            <div class="col-lg-12">-->

    <!--                <div class="footer_nav_container">-->

    <!--                    <div class="cr">©2018 All Rights Reserved. This template is made with <i class="fa fa-heart-o"-->

    <!--                                                                                             aria-hidden="true"></i>-->

    <!--                        by <a href="#">Colorlib</a></div>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->

    <!--</footer>-->



</div>





<script src="<?php echo e(asset('assets/js/jquery-3.2.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/styles/bootstrap4/popper.js')); ?>"></script>

<script src="<?php echo e(asset('assets/styles/bootstrap4/bootstrap.min.js')); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

<script src="<?php echo e(asset('assets/js/bootstrap-select.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/Isotope/isotope.pkgd.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/easing/easing.js')); ?>"></script>

<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

<script src="<?php echo e(asset("assets/js//toastr.min.js")); ?>"></script>



<?php echo $__env->yieldContent('js'); ?>





</body>



</html>

