<nav class="navbar navbar-expand-lg py-4 navigation header-padding" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
      <h3 class="{{ Route::is('home') || Route::is('login') || Route::is('register')  ? 'logo' : 'logo-white' }}">Photo
        City</h3>
    </a>

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
      aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarsExample09">
      <ul
        class="navbar-nav m-auto {{ Route::is('home') || Route::is('login') || Route::is('register')  ? 'nav-text-dark' : 'nav-text-white' }}">
        <li class="nav-item"><a class="nav-link {{ Route::is('home')  ? 'active' : '' }}"
            href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item"><a class="nav-link {{ Route::is('about')  ? 'active' : '' }}"
            href="{{route('about')}}">About</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::is('services')  ? 'active' : '' }}"
            href="{{route('services')}}">Services</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::is('gallery')  ? 'active' : '' }}"
            href="{{route('gallery')}}">Gallery</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::is('contact')  ? 'active' : '' }}"
            href="{{route('contact')}}">Contact</a></li>
      </ul>





      {{-- if the user's login in --}}
      @auth
      <div class="dropdown">
        <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="profile" src="images/contact/profile-sample.jpg" />
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <h4>{{Auth::user()->username}}<br /><span>Client</span></h4>
          <a class="dropdown-item" href="#">Another action</a>
          <form action="{{route('logout')}}" method="post">
            @csrf
          <button class="dropdrown-item" type="submit"> Logout </button>
          {{-- <a href="#">Logout</a> --}}
          </form>
        </div>
      </div>

      {{-- <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit"> logout </button>
        <a href="">dropdown to</a>
      </form> --}}

      <div class="action">
        <div class="profile">
          <img src="images/contact/profile-sample.jpg">
        </div>
          <div class="menu">
            <h3>{{Auth::user()->username}}<br /><span>Client</span></h3>
            <ul>
              <li><img src=""><a href="#">Profile</a></li>
              <li><img src=""><a href="#">Logout</a></li>
            </ul>
          </div>
      </div>


      @else
      <a href="{{route('login')}}" button type="button" class="btn btn-solid-border">Login<i
          class="fa fa-angle-right ml-1"></i></a>
      <a href="{{route('register')}}" button type="button" class="btn btn-not-solid-border
      {{ Route::is('home') || Route::is('login') || Route::is('register')  ? 'btn-text-dark' : 'btn-text-white' }}
      ">Register<i
          class="fa fa-angle-right ml-1"></i></button></a>
      @endauth


    
    </div>
  </div>
</nav>