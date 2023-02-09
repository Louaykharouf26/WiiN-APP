@extends('layouts.layoutprovider')
@section('profile')

<!--<form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <!-- Your other profile fields ... 

  <div class="form-group">
    <label for="profile_picture">Profile Picture</label>
    <input type="hidden" name="name" value="{{ auth()->user()->email }}">
    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
    <input type="file" name="profile_ picture" id="profile_picture" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
<img src="{{ asset('storage/'.auth()->user()->profile_picture) }}" alt="Profile Picture">

-->
<img id="profilepic" src="/img/profile.png" alt="WiiN Logo"></img>
@if (Auth::check())
    <p class="profilename">{{ Auth::user()->name }}</p>
    <p class="profilerole">{{ Auth::user()->role }}</p>
    <p class="cityprofile">Gabes, Tunisia</p>
    <a href="{{url('/chatify')}}"><button type="button" class="btn btn-primary messagebtn"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send Message</button></a>
    <p class="editprofile">Personal Details</p>
    <hr class="underline">
    <div class="detailsprofile">
        <h3>Details</h3>
    <p>Name: {{ Auth::user()->name }}</p> <br>
    <p>Email: {{ Auth::user()->email }}</p> <br>
    <p>Location: Gabes, Tunisia</p> <br>
    <p>Contact Number : {{ Auth::user()->contact_number }}</p> <br>
    <p>Date Of Birth : 26-01-2000</p> <br>
    <p>Gender : male</p> <br>
    </div>
    <div class="skills">
    <h3>Skills</h3>
     <p class="skill1">Colors Mixing</p>
     <p class="skill1">Color Scaling</p>
    </div>
@endif
@endsection