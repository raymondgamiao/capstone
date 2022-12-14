@extends('layout')

@section('content')

<section class="section mt-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container mt-4 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h3 class="text-uppercase text-center mb-5">Login your account</h3>

              <form method="POST" action="{{ route('user/authenticate') }}">
                @csrf
                @error('username')
                <span class="text-danger "><em>{{$message}}</em></span>
                @enderror
                <div class="form-outline mb-4">
                  <input type="text" id="username" name="username" class="form-control form-control-lg"
                    value="{{old('username')}}" />
                  <label class="form-label" for="username">Username</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    value="{{old('password')}}" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-solid-border btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">You don't have an account? <a href={{route('register')}}
                    class="fw-bold text-body">Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection