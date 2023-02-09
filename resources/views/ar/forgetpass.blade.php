@extends('ar.layouts.layoutforget')
@section('content')
<div class="container" id="signinbx">
 <p class="welcome">@lang('message.wlcme') <span class="wiin">@lang('message.WiiN')</span></p> 
 <p class="Sin">Forgot Password</p>
 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class=" mb-3">
                            <label for="staticEmail" class="col-md-4 col-form-label text-md-end" id="label1">{{ __('Enter your username or email address') }}</label>

                            <div class="col-md-6">
                                <input id="staticEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="signbtn">
                                    {{ __('Send ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>







<!--


   <div class="mb-3 ">
    <label for="staticEmail" class="col-sm-2 col-form-label" id="label1">Enter your username or email address</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" placeholder="Username or email address" >
    </div>
  </div>
  
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" id="signbtn">Send</button>
  </div>-->
</div>

   
@endsection