@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="card bg-light text-secondary">
                <div class="login-card-header mx-5">{{ __('Sign in') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center align-items-center">
                            <p class="col-md-10 mx-5"> 
                                Enter your details to continue your learning path 
                            </p>

                            <div class="form-outline col-md-10 mx-5">
                                <input class="form-control id="floatingInput" placeholder="name@example.com" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="floatingInput">{{ __('Email Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="form-outline col-md-10 mx-5">
                                <input class="form-control id="floatingPassword" placeholder="Password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="floatingInput">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-4 mx-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <div class="col-md-10 offset-md-4 mx-5">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <p>Forgot Password?
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recover it') }}
                                    </a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
