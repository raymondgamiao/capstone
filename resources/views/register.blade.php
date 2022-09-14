@extends('layout')

@section('content')
<section class="section mt-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          @if (session()->has('success'))
          <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
            class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
          @endif
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-left h1 fw-bold mb-3 mx-1 mx-md-4 mt-4">Register</p>
                <form class="mx-1 mx-md-4" action="{{ route('user/store') }}" method="POST">
                  @csrf

                  @error('username')
                  <span class="text-danger "><em>{{$message}}</em></span>
                  @enderror
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="username" name="username" class="form-control"
                        value="{{old('username')}}" />
                      <label class="form-label" for="username">Username</label>
                    </div>
                  </div>

                  @error('name')
                  <span class="text-danger "><em>{{$message}}</em></span>
                  @enderror
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" />
                      <label class="form-label" for="name">Name</label>
                    </div>
                  </div>

                  @error('usertype')
                  <span class="text-danger "><em>{{$message}}</em></span>
                  @enderror
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <select class="form-select" name="usertype">
                        <option selected value="client">Client</option>
                        <option selected value="employee">Employee</option>
                        <option selected value="admin">Admin</option>
                      </select>
                      <label class="form-label" for="usertype">User Type</label>
                    </div>
                  </div>

                  @error('password')
                  <span class="text-danger "><em>{{$message}}</em></span>
                  @enderror
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  @error('password_confirmation')
                  <span class="text-danger "><em>{{$message}}</em></span>
                  @enderror
                  <div class="d-flex flex-row align-items-center mb-4">
                    <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control" />
                      <label class="form-label" for="password_confirmation">Repeat your password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit"
                      class="btn btn-solid-border btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href={{route('login')}}
                      class="fw-bold text-body">Login here</u></a></p>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="images/register-pic.png" class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection