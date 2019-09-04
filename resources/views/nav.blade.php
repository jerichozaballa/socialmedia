<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="/home"><i class="fab fa-facebook-square" style="font-size:20px"></i> Larabook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" href=""></a>
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
        <a class="nav-link" href="/home"><i class="fa fa-home" style="font-size:20px"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account"><i class="fa fa-pencil-alt" style="font-size:20px"></i> Post</a>
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
                            {{ Auth::user()->first }} {{ Auth::user()->last }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('pass.edit', ['user' => Auth::user()]) }}">Change Password</a>
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