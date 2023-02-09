@extends('layouts.layoutprovider')
@section('works')
<img id="profilepic1" src="/img/profile.png" alt="WiiN Logo"></img>
@if (Auth::check())
    <p class="profilename1">{{ Auth::user()->name }}</p>
    <p class="profilerole1">{{ Auth::user()->role }}</p>
    <p class="cityprofile1">Gabes, Tunisia</p>
    @endif
    <h1 class="title1">My Works</h1>
    <a href="{{url('/workdetails')}}">
    <div class="workdesc">
    <img id="workpic" src="/img/painter.png" alt="WiiN Logo"></img>
    <p class="FW">First work </p>
    <p>click for details</p>
    </div>
    </a>
@endsection