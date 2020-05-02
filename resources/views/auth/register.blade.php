@extends('layouts.auth')

@section('auth', 'Sign Up')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="text-center mb-4">
                    {{-- <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> --}}
                    <h1 class="h3 mb-3 font-weight-normal">{{ __('Join to Small') }}</h1>
                    <p>Create an account to write your stories, personalize your homepage, and follow authors.</p>
                </div>
        
                <div class="form-label-group">
                    <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"  placeholder="Name" required autofocus>
                    <label for="inputName">{{ __('Name') }}</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
        
                <div class="form-label-group">
                    <input type="password" name="password_confirmation" id="inputPasswordC" class="form-control @error('password') is-invalid @enderror" placeholder="Password Confirm" required autocomplete="new-password">
                    <label for="inputPasswordC">{{ __('Password Confirm') }}</label>
                </div>
        
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Register') }}</button>
        
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 | Small</p>  
            </form>
        </div>
    </div>
</div>
@endsection
