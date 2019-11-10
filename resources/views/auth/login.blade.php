
@extends('layouts.app')
<style>
        
  
       body {
          margin: 0;
          padding-top: 0;
          background: url(https://wallpaperplay.com/walls/full/7/7/0/215252.jpg);
          background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: 50% 50%; 
         background-size: cover;
          font-family: sans-serif;
        }
   
        </style>
@section('content')

{{-- <div class="box">
  <h2>Login</h2>
  <form>
    <div class="inputBox">
      <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Username</label>
    </div>
    <div class="inputBox">
      <input type="password" name="password" required value=""
             onkeyup="this.setAttribute('value', this.value);"
             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <label>Password</label>
    </div>
    <input type="submit" name="sign-in" value="Sign In">
  </form>
</div>




 --}}



<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><h2>{{ __('Login') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                            <div class="inputBox">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label>Email Address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="inputBox">
                                  <input id="password" type="password" name="password"  required value="" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password">     
                                  <label>Password</label>
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                       

                        <div class="form-group row">
                            <div class="col-md-5 offset-md-4">
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
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#41e926">
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
@endsection
