<nav class="navbar navbar-expand-lg py-4 navigation header-padding" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
      <h3
        class="{{ Route::is('home') || Route::is('login') || Route::is('register')|| Route::is('clientprofile') || Route::is('clienteditprofile')  ? 'logo' : 'logo-white' }}">
        Photo
        City</h3>
    </a>

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
      aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarsExample09">
      <ul
        class="navbar-nav m-auto {{ Route::is('home') || Route::is('login') || Route::is('register')|| Route::is('clientprofile') || Route::is('clienteditprofile')  ? 'nav-text-dark' : 'nav-text-white' }}">
        <li class="nav-item"><a class="nav-link {{ Route::is('home')  ? 'active' : '' }}"
            href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item"><a class="nav-link {{ Route::is('about')  ? 'active' : '' }}"
            href="{{route('about')}}">About</a></li>
        <li class="nav-item "><a class="nav-link  {{ Route::is('services')  ? 'active' : '' }}"
            href="{{route('services')}}">Services</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::is('gallery')  ? 'active' : '' }}"
            href="{{route('gallery')}}">Gallery</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::is('contact')  ? 'active' : '' }}"
            href="{{route('contact')}}">Contact</a></li>
      </ul>

      {{-- if the user's login in --}}
      @auth
      <div class="dropdown">
        <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <img class="profile" @if (Auth::user()->usertype === 'client')
          src="{{ asset('storage/' . Auth::user()->client->first()->pfp) }}"
          @else
          src="{{ asset('storage/' . Auth::user()->employee->first()->pfp) }}"
          @endif
          />

        </button>
        <ul class="dropdown-menu w-100">
          <li><a class="dropdown-item" href="#"><strong>{{Auth::user()->username}}</strong><br></a></li>
          @if (Auth::user()->usertype !== 'client')
          @if (Auth::user()->status === 'active')
          <li><a class="dropdown-item" href="{{route('admin')}}">Dashboard</a></li>
          @endif
          <li><a class="dropdown-item" href="{{route('admin/profile')}}">Profile</a></li>
          @else
          <li><a class="dropdown-item" href="{{route('clientprofile')}}">Profile</a></li>
          @endif
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="mb-3 ml-2 mt-3 btn btn-white"> Logout </button>
          </form>
          @else
          <a href="{{route('login')}}" button type="button" class="btn btn-solid-border">Login<i
              class="fa fa-angle-right ml-1"></i></a>
          <a href="{{route('register')}}" button type="button" class="btn btn-not-solid-border
      {{ Route::is('home') || Route::is('login') || Route::is('register')  ? 'btn-text-dark' : 'btn-text-white' }}
      ">Register<i class="fa fa-angle-right ml-1"></i></button></a>
          @endauth

      </div>
    </div>
</nav>