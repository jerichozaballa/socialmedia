@extends('layouts.loginregister')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container con">
                <br>
                <div class=""><center>{{ __('Login') }}</center></div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">{{ __('Login') }}</h5>
            <form method="POST" action="{{ route('login') }}" class="form-signin">
                @csrf
              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autocomplete="email" autofocus>
                <label for="email">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                <label for="password">{{ __('Password') }}</label>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
   
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>
                    @if (Route::has('register'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Register?') }}
                        </a>
                    @endif
              <hr class="my-4">
            </form>

            <a href="/"><i class="fab fa-facebook-square" style="font-size:20px"></i> Larabook</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
