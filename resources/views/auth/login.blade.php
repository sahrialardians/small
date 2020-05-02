@extends('layouts.auth')

@section('content')
    <form class="form-signin"method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center mb-4">
            <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Welcome Back</h1>
            <p>Sign in to get personalized story recommendations, follow authors and topics you love, and interact with stories.</p>
        </div>

        <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"  placeholder="Email address" required autofocus>
            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
            <label for="inputPassword">{{ __('Password') }}</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="checkbox mb-3 ml-4">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>
        
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 | Small</p>  
    </form>
@endsection
