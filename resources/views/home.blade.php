@extends('layouts.app')

@section('content')

       <!--<div class="card">
                <div class="card-header">Dashboard</div> 
                <div class="card-body">
                    You are logged in!
                </div>
            </div>-->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
  <div class="row">
    <div class="col-sm-4" style="">
   <br>
   <div class="card bx" style="">
    <div class="card-header"><h1 style="text-align:center">My Profile</h1></div>
    
    <img class="card-img-top" src="\storage\images\bg-01.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
<div class="btn dropdown dropleft  float-right">
    <span class="fa fa-angle-double-down dropdown-toggle" data-toggle="dropdown">
    </span>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{ route('homes.edit', ['user' => $user]) }}">Edit Profile</a>
    </div>
  </div><br>
      <hr>
     
      <h5><i class="fa fa-user"></i> &nbsp {{ $user->first }} {{ $user->last }}</h5>
      <?php
        $bday = $user->bday;
        $bday=date_create($bday);
        $bday=date_format($bday,"m-d-Y");
      ?>
      <h6><i class="fa fa-birthday-cake"></i> &nbsp <?php echo $bday; ?></h6>
      <h6><i class="fa fa-phone"></i> &nbsp {{ $user->email }}</h6>
    </div>
  </div>  

   <br>
   <div class="card bx" style="">
  
    
     <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">First item</a>
    <a href="#" class="list-group-item list-group-item-action">Second item</a>
    <a href="#" class="list-group-item list-group-item-action">Third item</a>
    <a href="#" class="list-group-item list-group-item-action">Third item</a>
    <a href="#" class="list-group-item list-group-item-action">Third item</a>
    <a href="#" class="list-group-item list-group-item-action">Third item</a>
    <a href="#" class="list-group-item list-group-item-action">Third item</a>
  </div>

    
  </div>  

   <br>
   <div class="card bx" style="">
    <div class="card-header"><h3 style="">About <i class="fab fa-facebook-square"></i> Larabook?</h3></div>
    
    <img class="card-img-top" src="\storage\images\bg-01.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <hr>
      <p>
        Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
      </p>

    </div>
  </div>  
  </div>

  <div class="col-sm-8" style="">
   <br>
   @foreach($accounts as $account)
   <div class="card bx">
    <div class="card-body">
      <img src="\storage\images\j.png" class="rounded-circle float-left" alt="" width="65" height="60"> 
      <br>
      <h5 style="padding-bottom:10px;"> &nbsp&nbsp&nbsp {{ $user->first }} {{ $user->last }}</h5>
      <hr>
      <p style="font-size:20px;">{{ $account->post }}</p>
      <hr>
      <button type="button" class="btn btn-secondary"><i class="fa fa-thumbs-up"></i> Like</button>
      <button type="button" class="btn btn-secondary"><i class="fa fa-comment"></i> Comment</button>

    </div>
  </div>  
  <br>
  @endforeach



   
  

  </div>

</div>
<br><br>
@endsection
