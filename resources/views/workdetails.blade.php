@extends('layouts.layoutprovider')
@section('workdetails')
<img id="profilepic" src="/img/painter.png" alt="WiiN Logo"></img>
<h1 class="title1">First work </h1>
    
    <div class="workdesc">
  
    <p class="FW1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
five centuries, but also the leap into electronic typesetting... </p>
<p class="reviews">Reviews</p>
<div class="stars">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
    </div>
    <p class="SF">Send Feedbacks</p>
    <input type="text" class="form-control SF1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    <button type="button" class="btn btn-primary send1">Send</button>
    </div>
    

@endsection