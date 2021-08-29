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
                        <h2 class="text-play">Forgot Password</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
