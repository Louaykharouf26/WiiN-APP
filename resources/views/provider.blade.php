@extends('layouts.layoutprovider')
@section('content')
<div class="postbx">
<img id="logoE" src="/img/Ellipse3.png" alt="WiiN Logo"></img>
<div class="mb-3">

  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Somthing..."></textarea>
</div>
<div class="col-auto">
<form action="{{ route('description.update') }}" method="POST">
@csrf
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Write Somthing..."></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn  mb-3" id="postbtn">Post
  
    </button>
  </div>
  </form>
  </div>
</div>
<div class="userbx">
    @foreach ($userlist as $user)
        <div class="user-box">
        <div class="mb-3 user1">
<img id="logoE1" src="/img/patty.png" alt="WiiN Logo"></img>
<p class="name">{{$user->name}}</p>
<p class="posted">Posted 5 mins ago</p>
</div>
<div class="content1">
<p class="text">{{$user->description}}</p>
<button type="submit" class="btn  mb-3" id="Sprev">See Provider’s Previous Works</button>
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#bxmodal" id="CP">Contact Provider</button>
</div>
            
        </div>
    @endforeach
</div>
<!--<div class="userbx">
<div class="mb-3 user1">
 
<img id="logoE1" src="/img/Ellipse3.png" alt="WiiN Logo"></img>
<p class="name">Mohamed Alaya</p>
<p class="posted">Posted 5 mins ago</p>
</div>
<div class="content1">
<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
five centuries, but also the leap into electronic typesetting...<span class="seemore">See More</span></p>
    <button type="submit" class="btn  mb-3" id="Sprev">See Provider’s Previous Works</button>
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#bxmodal" id="CP">Contact Provider</button>


</div>
</div>


-->
<div class="modal fade " id="bxmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!--<div class="modal-header">-->
        <h5 class="modal-title" id="cplabel">Contact the Provider</h5>
        <button type="button" class="btn-close" id="close" data-bs-dismiss="modal" aria-label="Close"></button>
      <!--</div>-->
      <div class="modal-body">
      <textarea class="form-control" id="contactP" rows="3"></textarea>
      <button class="btn sendbtn" type="submit">Send</button>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

@endsection