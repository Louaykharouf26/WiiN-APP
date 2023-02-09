@extends('layouts.layoutprovider')
@section('content1')
<div class="postbx">
<img id="logoE" src="/img/Ellipse3.png" alt="WiiN Logo"></img>
<div class="mb-3">
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
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#bxmodal" id="CP1">Contact Searcher</button>
</div>
            
        </div>
    @endforeach
</div>
 

<div class="modal fade " id="bxmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <h5 class="modal-title" id="cplabel">Contact the Searcher</h5>
        <button type="button" class="btn-close" id="close" data-bs-dismiss="modal" aria-label="Close"></button>
     
      <div class="modal-body">
      <textarea class="form-control" id="contactP" rows="3"></textarea>
      <button class="btn sendbtn" type="submit">Send</button>
      </div>
     
    </div>
  </div>
</div>

@endsection