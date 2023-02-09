@extends('ar.layouts.layoutsignup')
@section('content')
<div class="container" id="signinbx">
<p class="welcome">@lang('message.wlcme') <span class="wiin">@lang('message.WiiN')</span></p> 
 <p class="Sup">@lang('message.suptxt')</p>
 <p class="NA1">@lang('message.acc')</p>
 <a href="#" class="signUp" onclick="window.location='{{ url("/SignIn") }}'">@lang('message.sIN')</a>
 
 <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class=" mb-3">
                            <label for="name1" class="col-sm-2 col-form-label" id="labelname">@lang('message.name')</label>

                            <div class="col-md-6">
                                <input id="name1" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="@lang('message.pholder7')">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 ">
    <label for="contact" class="col-sm-2 col-form-label" id="labelcontact">@lang('message.nphone')</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="contact" placeholder="@lang('message.nphone')" >
    </div>
  </div>
                        <div class=" mb-3">
                            <label for="staticEmail1" class="col-md-4 col-form-label text-md-end" id="label1v0">@lang('message.label1')</label>

                            <div class="col-md-6">
                                <input id="staticEmail1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('message.pholder3')">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="inputPassword2" class="col-sm-2 col-form-label" id="label2v0">@lang('message.label2')</label>

                            <div class="col-md-6">
                                <input id="inputPassword2" placeholder="@lang('message.pholder4')" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end" id="confirm" >@lang('message.confirmpass')</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <p class="choice">@lang('message.signas') <span class="selection">@lang('message.choose')</span></p>

                    <!--    <button type="button" class="btn" id="serviceprovider" onclick="showIconeM()">
  <p class="Sprovider">@lang('message.pholder5')</p>
  <img id="checkiconM" src="/img/checked.png" alt="checked icon"> 
</button>
<button type="button" class="btn" id="servicesearcher" onclick="showIconeV()">
  <p class="Ssearcher">@lang('message.pholder6')</p>
  <img id="checkiconV" src="/img/checked.png" alt="checked icon"> 
</button>-->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="signupbtn">
                                @lang('message.signupbtn')
                                </button>
                            </div>
                        </div>
                    </form>



 <!--
   <div class="mb-3 ">
    <label for="staticEmail1" class="col-sm-2 col-form-label" id="label1v0">Enter your username or email address</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail1" placeholder="Username or email address" >
    </div>
  </div>
  <div class="mb-3 ">
    <label for="name1" class="col-sm-2 col-form-label" id="labelname">Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name1" placeholder="User name" >
    </div>
  </div>
  <div class="mb-3 ">
    <label for="contact" class="col-sm-2 col-form-label" id="labelcontact">Contact Number</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="contact" placeholder="Contact Number" >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword2" class="col-sm-2 col-form-label" id="label2v0">Enter your Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
  </div>
  <button type="button" class="btn" id="serviceprovider" onclick="showIconeM()">
  <p class="Sprovider">Service Provider</p>
  <img id="checkiconM" src="/img/checked.png" alt="checked icon"> 
</button>
<button type="button" class="btn" id="servicesearcher" onclick="showIconeV()">
  <p class="Ssearcher">Service Searcher</p>
  <img id="checkiconV" src="/img/checked.png" alt="checked icon"> 
</button>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" id="signupbtn">Sign Up</button>
  </div> -->
</div>

 
   
@endsection