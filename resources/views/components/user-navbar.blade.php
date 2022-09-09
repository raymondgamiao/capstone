<nav class="navbar navbar-expand-lg py-4 navigation header-padding " id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <h3 class="{{ Route::is('home')  ? 'logo' : 'logo-white' }}">Photo City</h3>
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
            aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
            <ul class="navbar-nav m-auto {{ Route::is('home')  ? 'nav-text-dark' : 'nav-text-white' }}">
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

            <a href="contact.html" class="btn btn-solid-border d-none d-lg-block">Get an estimate <i
                    class="fa fa-angle-right ml-2"></i></a>
        </div>
    </div>
</nav>