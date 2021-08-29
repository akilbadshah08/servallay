@extends('htmlblade/layouts/main')

@section('content')

    <div class="container" style="padding: 100px 0;">
        <div class="row justify-content-center">
            <div class="col-sm-6 trial">
				<img src="{{ asset('assets/img/sign_up.jpg') }} ">
			</div>

            <div class="col-md-6">
                <div class="card-1">
                 
                    <div class="card-body-1">
                        <h2 class="text-play">GET STARTED NOW</h2>
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" placeholder="First Name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <input id="surname" type="text"
                                           class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                           name="surname" value="{{ old('surname') }}" placeholder="Last Name" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" placeholder="Email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                          placeholder="Password"  name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Confirm Password" required>
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
                                ALREADY HAVE AN ACCOUNT? <a href="{{ url('login') }}">CLICK HERE</a> 
                              </div>
                          </div>
                          
                          
                            </div>

                          
                           
                        </form>
           
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
