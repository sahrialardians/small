@extends('layouts.auth')

@section('auth', 'Reset Password')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <form class="form-signin"method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-normal">{{ ('Reset Password') }}</h1>
                </div>
                
                    <div class="form-label-group">
                        <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="dsf" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        <label for="inputEmail">{{ __('Email Address') }}</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="dsf" name="password" required autocomplete="new-password">
                        <label for="inputNewPassword">{{ __('New Password') }}</label>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-label-group">
                        <input type="password" id="inputConfPassword" class="form-control @error('password') is-invalid @enderror" placeholder="dsf" name="password_confirmation" required autocomplete="new-password">
                        <label for="inputConfPassword">{{ __('Password Confirm') }}</label>
                    </div>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Reset Password') }}</button>
            
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 | Small</p> 
            </form>
        </div>
    </div>
</div>
@endsection