<!DOCTYPE html>

<html lang="zxx">





<!-- Mirrored from 103.205.64.158/~nsystechlg/danscool/html/Instudio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Mar 2021 12:23:35 GMT -->



<head>

    <meta charset="UTF-8">

    <meta name="description" content="Gutim Template">

    <meta name="keywords" content="Gutim, unica, creative, html">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>Sevalley</title>



    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap"

        rel="stylesheet">



    <!-- Css Styles -->

    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/magnific-popup.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/slicknav.min.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/style.css" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/calender.css" type="text/css">



</head>



<style>

    body{

        display: block;

    }

</style>



<body>

    <div class="container" style="padding-top: 30px">

        <div class="row">

           <div class="col-md-12">

              <div class="header-logo">

              </div>

           </div>

       </div>

        <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="c_login">

                        <h3 class="text-center1 mb-3">Welcome Back!</h3>

                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">

                        @csrf

                            

                          <div class="row">



                            <div class="col-md-12">

                                <div class="form-group">



                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>



                                @if ($errors->has('email'))

                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>

                                @endif

                            </div>

                        </div>



                            <div class="col-md-12">

                                

                        <div class="form-group">



                                <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>



                                @if ($errors->has('password'))

                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $errors->first('password') }}</strong>

                                    </span>

                                @endif

                            </div>

                        </div>

                           

                            <div class="col-md-12">

                               <div class="form-check_btn">

                                <button>Sign In</button>

                            </div>

                            <div class="form-check_btn1">

                                <p>Don't an Have Account?<a href="<?php echo url('register') ?>"><strong> CLICK HERE</strong></a> </p>

                                <a href="{{ url('password/reset') }}"><strong> FORGOT PASSWORD</strong></a>

                            </div>

                           </div>

                            

                          </div>

                       

                        </form>

                    </div>

        

        </div>

    </div>

</div>





        <!-- Js Plugins -->

<script src="{{ asset('assets/js') }}/jquery-3.3.1.min.js"></script>

<script src="{{ asset('assets/js') }}/bootstrap.min.js"></script>

<script src="{{ asset('assets/js') }}/slick.js"></script>

<script src="{{ asset('assets/js') }}/owl.carousel.min.js"></script>

<script src="{{ asset('assets/js') }}/header.js"></script>

<script src="{{ asset('assets/js') }}/jquery.magnific-popup.min.js"></script>

<script src="{{ asset('assets/js') }}/mixitup.min.js"></script>

<script src="{{ asset('assets/js') }}/jquery.slicknav.js"></script>





</body>

</html>

    