<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/fontawesome/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/fb.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="/fontawesome/js/all.js"></script>
    <script src="/jquery.min.js"></script>

  
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><i class="fab fa-facebook-square" style="font-size:20px"></i> Larabook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">

        
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>  
     </div>
  </div>


      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-home" style="font-size:20px"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-plus" style="font-size:20px"></i> Post</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="">Manage Account</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
    
  </div>  
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" style="">
   <br>
   <div class="card bx" style="">
    <div class="card-header"><h1 style="text-align:center">My Profile</h1></div>
    
    <img class="card-img-top" src="\storage\images\bg-01.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <hr>
      <h5><i class="fa fa-user"></i> &nbsp John Doe</h5>
      <h6><i class="fa fa-phone"></i> john99@gmail.com Doe</h6>
      <h6><i class="fa fa-search"></i> John Doe</h6>

    </div>
  </div>  

   <br>
   <div class="card bx" style="">
    <div class="card-header"><h3 style="">Friend Suggestions:</h3></div>
    
    <img class="card-img-top" src="\storage\images\bg-01.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <hr>
      <h5><i class="fa fa-user"></i> &nbsp John Doe</h5>
      <h6><i class="fa fa-phone"></i> john99@gmail.com Doe</h6>
      <h6><i class="fa fa-search"></i> John Doe</h6>

    </div>
  </div>  

   <br>
   <div class="card bx" style="">
    <div class="card-header"><h3 style="">About <i class="fab fa-facebook-square"></i> Larabook?</h3></div>
    
    <img class="card-img-top" src="\storage\images\bg-01.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <hr>
      <h5><i class="fa fa-user"></i> &nbsp John Doe</h5>
      <h6><i class="fa fa-phone"></i> john99@gmail.com Doe</h6>
      <h6><i class="fa fa-search"></i> John Doe</h6>

    </div>
  </div>  
  </div>

  <div class="col-sm-8" style="">
   <br>
   <div class="card bx" style="">
    <div class="card-body">
      <img src="\storage\images\j.png" class="rounded-circle float-left" alt="" width="65" height="60"> 
      <br>
      <h5 style="padding-bottom:10px;"> &nbsp&nbsp&nbspJohn Doe</h5>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <hr>
      <button type="button" class="btn btn-secondary"><i class="fa fa-thumbs-up"></i> Like</button>
      <button type="button" class="btn btn-secondary"><i class="fa fa-comment"></i> Comment</button>

    </div>
  </div>  

   <br>
   <div class="card bx" style="">
    <div class="card-body">
      <img src="\storage\images\j.png" class="rounded-circle float-left" alt="" width="65" height="60"> 
      <br>
      <h5 style="padding-bottom:10px;"> &nbsp&nbsp&nbspJohn Doe</h5>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <hr>
      <button type="button" class="btn btn-secondary"><i class="fa fa-thumbs-up"></i> Like</button>
      <button type="button" class="btn btn-secondary"><i class="fa fa-comment"></i> Comment</button>

    </div>
  </div>  

   <br>
  <div class="card bx" style="">
    <div class="card-body">
      <img src="\storage\images\j.png" class="rounded-circle float-left" alt="" width="65" height="60"> 
      <br>
      <h5 style="padding-bottom:10px;"> &nbsp&nbsp&nbspJohn Doe</h5>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <hr>
      <button type="button" class="btn btn-secondary"><i class="fa fa-thumbs-up"></i> Like</button>
      <button type="button" class="btn btn-secondary"><i class="fa fa-comment"></i> Comment</button>

    </div>
  </div> 

  </div>

</div>
<br><br>

</div>

<div class="bg-dark" style="margin-bottom:0; padding:18px 0px 15px 30px;">
  <i class="fa fa-copyright" style="color:#fff;"></i>
  <span style="color:#fff;">Copyright 2019</span>
</div>

<button class="btn btn-danger" id="hhh">Clisddsck to fade in boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

<script type="text/javascript">
$(document).ready(function(){
  $("#hhh").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(3000);
  });
});
</script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_navbar_brand&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 02:44:43 GMT -->
</html>
