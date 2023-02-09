@extends('layouts.layoutprovider')
@section('content')
<div class="postbx">
<img id="logoE" src="/img/Ellipse3.png" alt="WiiN Logo"></img>
<div class="mb-3">

  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Somthing..."></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn  mb-3" id="postbtn">Post</button>
  </div>
</div>
<div class="userbx">
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
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="CP">Contact Provider</button>


</div>
</div>
<div class="userbx1">
<div class="mb-3 user1">
 
<img id="logoE1" src="/img/Ellipse2.png" alt="WiiN Logo"></img>
<p class="name">Hugo First</p>
<p class="posted">Posted 15 mins ago</p>
</div>
<div class="content1">
<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
five centuries, but also the leap into electronic typesetting...<span class="seemore">See More</span></p>
    <button type="submit" class="btn  mb-3" id="Sprev">See Provider’s Previous Works</button>
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="CP">Contact Provider</button>


</div>
</div>
<div class="userbx2">
<div class="mb-3 user1">
 
<img id="logoE1" src="/img/john.png" alt="WiiN Logo"></img>
<p class="name">John Quil</p>
<p class="posted">Posted 32 mins ago</p>
</div>
<div class="content1">
<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
five centuries, but also the leap into electronic typesetting...<span class="seemore">See More</span></p>
    <button type="submit" class="btn  mb-3" id="Sprev">See Provider’s Previous Works</button>
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="CP">Contact Provider</button>

</div>
</div>
<div class="userbx3">
<div class="mb-3 user1">
 
<img id="logoE1" src="/img/mauren.png" alt="WiiN Logo"></img>
<p class="name">Maureen Biologist</p>
<p class="posted">Posted 1 hr ago</p>
</div>
<div class="content1">
<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
five centuries, but also the leap into electronic typesetting...<span class="seemore">See More</span></p>
    <button type="submit" class="btn  mb-3" id="Sprev">See Provider’s Previous Works</button>
    <button type="submit" class="btn  mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" id="CP">Contact Provider</button>

</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog bxmodal">
    <div class="modal-content">
     
        <h5 class="modal-title" id="cplabel">Contact the Provider</h5>
        <button type="button" class="btn-close" id="close" data-bs-dismiss="modal" aria-label="Close"></button>
      
      <textarea class="form-control" id="contactP" rows="3"></textarea>
      <button class="btn sendbtn" type="submit">Send</button>
      
    
    
  </div>
  </div>
</div>

@endsection