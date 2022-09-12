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

            <button type="button" class="btn btn-solid-border" data-bs-toggle="modal" data-bs-target="#loginModal">Login<i class="fa fa-angle-right ml-1"></i></button>
            <a href={{route('register')}} button type="button" class="btn btn-not-solid-border">Register<i class="fa fa-angle-right ml-1"></i></button></a>
            
               <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Login form</h5>
                       </div>
                       <div class="modal-body">
                           <form>
                               <div class="mb-1">
                                 <label for="exampleInputEmail1" class="form-label"></label>
                                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                 <label for="exampleInputPassword1" class="form-label"></label>
                                 <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                               </div>
                               
                             </form>
                       </div>
                       <div class="modal-footer text-center">
                           <button type="submit" class="btn btn-solid-border">Submit</button>
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       </div>
                     </div>
                   </div>
                 </div>
        </div>
    </div>
</nav>