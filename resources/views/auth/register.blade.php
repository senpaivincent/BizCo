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
                        <img src="img/2.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-7 my-5">
                        <div class="card-body">
                            <div class="card-title mb-4" style="font-size: 35px">{{ __('Register') }}</div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label">{{ __('Name') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" pattern="[a-zA-Z]+" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="{{ old('email') }}" required autocomplete="email">
        
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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" pattern="[A-Za-z0-9]+" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-3 col-form-label">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" pattern="[A-Za-z0-9]+" required autocomplete="new-password">
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
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