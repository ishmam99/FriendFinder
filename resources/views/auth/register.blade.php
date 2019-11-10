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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="inputBox">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label>Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                              </div>

                    
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
                           
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                <label>Username</label>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="inputBox">
                                    <input id="password" type="password" name="password"  required value="" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">     
                                    <label>Password</label>
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                                  <div class="inputBox">
                                        <input id="password-confirm" type="password" name="password_confirmation"  required autocomplete="new-password" value="" class="form-control" >     
                                        <label>Confirm Password</label>
                                        
                                      </div>
                    

                           
                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
@endsection
