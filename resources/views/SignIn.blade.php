@extends('layouts.layout')
@section('content')
<div class="container" id="signinbx">

 <p class="welcome">@lang('message.wlcme') <span class="wiin">@lang('message.WiiN')</span></p> 
 <p class="Sin">Sign in</p>
 <p class="NA">No Account ?</p>
 <a href="{{ url('SignUp') }}" class="signUp" >Sign up</a>
 <a class="btn google " href="{{ url('auth/google') }}" role="button"><i class="fa fa-google"></i><p class="googlesign">@lang('message.google')</p></a>
 <a class="btn facebook " href="{{ url('auth/faebook') }}" role="button"><i class="fa fa-facebook"></i></a>
 <a class="btn apple " href="#" role="button"><i class="fa fa-apple"></i></a>
 <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label" id="label1">@lang('message.inputlabel1')</label>

                            <div class="col-md-6">
                                <input id="staticEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('message.pholder1')"> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label" id="label2">@lang('message.inputlabel2')</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="inputPassword" placeholder="@lang('message.pholder2')">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 remember">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label remlabel" for="remember">
                                        @lang('message.remember')
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="signbtn">
                                  @lang('message.signbtn')
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forget" href="{{ url('/forget') }}">
                                    @lang('message.FP')
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

 










  
  
 
  
</div>


    
@endsection