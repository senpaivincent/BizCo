@extends('layouts.master')

@section('content')
    <div class="pb-5">
        <!-- just a spacer -->
    </div>

    <div class="container pt-5 vh-100">
        <div class="row justify-content-center">   
            <div class="card wow fadeIn" data-wow-delay="1s">
                <div class="row no-gutters">
                    <div class="col-md-5 d-none d-md-block ">
                        <img src="img/1.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-7 my-5">
                        <div class="card-body">
                            <div class="card-title mb-4" style="font-size: 35px">{{ __('Login') }}</div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
            
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>
            
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>
            
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                            <label class="form-check-label text-default" for="remember">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
            
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-primary" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection