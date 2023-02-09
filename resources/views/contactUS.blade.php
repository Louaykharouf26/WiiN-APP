@extends('layouts.layoutcontact')
@section('content')
<div class="container" id="signinbx">
 <p class="welcome">Hello Again <span class="wiin">WiiN</span></p> 
 <p class="Sin">Contact Us</p>
 
 
   <div class="mb-3 ">
    <label for="staticEmail1" class="col-sm-2 col-form-label" id="label1">Enter your username or email address</label>
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
    <label for="contact" class="col-sm-2 col-form-label" id="labelcontact">Message</label>
    <div class="col-sm-10">
      <textarea    class="form-control" id="contact" placeholder="Write Something..." ></textarea>
    </div>
  </div>
  
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" id="signupbtn">Send</button>
  </div>
</div>

 
   
@endsection