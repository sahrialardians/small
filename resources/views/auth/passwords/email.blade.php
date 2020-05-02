@extends('layouts.auth')

@section('auth', 'Password Reset')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif 

            <form class="form-signin"method="POST" action="{{ route('password.email') }}"> 
                @csrf
                <div class="text-center mb-4">
                    <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Forgot Password</h1>
                    {{-- <p>Sign in to get personalized story recommendations, follow authors and topics you love, and interact with stories.</p> --}}
                </div>
            
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">
                    <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Send to Email') }}</button>
            
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 | Small</p>  
            </form>
        </div>
    </div>
</div>
@endsection

