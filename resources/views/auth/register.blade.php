@extends('layouts.loginregister')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                            <li class="">
                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
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
            <h5 class="card-title text-center">{{ __('Register') }}</h5>
            <form method="POST" action="{{ route('register') }}">
                        @csrf
              <div class="form-label-group">
                <input type="text" id="first" class="form-control @error('first') is-invalid @enderror" name="first" value="{{ old('first') }}" placeholder="First Name" autocomplete="first" autofocus>
                <label for="first">{{ __('First Name') }}</label>
                                @error('first')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-label-group">
                <input type="text" id="last" class="form-control @error('last') is-invalid @enderror" name="last" value="{{ old('last') }}" placeholder="Last Name" autocomplete="last">
                <label for="last">{{ __('Last Name') }}</label>
                                @error('last')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-label-group">
                <input type="date" id="bday" class="form-control @error('bday') is-invalid @enderror" name="bday" value="{{ old('bday') }}" placeholder="Birthday" required autocomplete="bday">
                <label for="bday">{{ __('Birthday') }}</label>
                                @error('bday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

                <div class="form-label-group">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autocomplete="email">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>


              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                <label for="password">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

                
            <div class="form-label-group">
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>      
                                                           
 
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>



                    
                        <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Login?') }}
                        </a>


 
              <hr class="my-4">
            </form>
            <a href="/"><i class="fab fa-facebook-square" style="font-size:20px"></i> Larabook</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
