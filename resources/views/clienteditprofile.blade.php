@extends('layout')

@section('content')
<section class="section mt-5">
   <div class="container content-inner mt-5 py-0">
      <div>
         @if (session('error'))
         <div x-data="{show: true}" class="alert alert-danger card-action " role="alert">
            {{ session('error') }}
         </div>
         @endif
         @if (session('success'))
         <div x-data="{show: true}" class="alert alert-success card-action " role="alert">
            {{ session('success') }}
         </div>
         @endif
         @if ($errors->any())
         <div x-data="{show: true}" class="alert alert-danger card-action " role="alert">
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <form method="POST" action="{{ route('client/profile/update') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-xl-3 col-lg-4">
                  <div class="card">
                     <div class="card-body">
                        <div class="card mb-4">
                           <div class="card-body text-center">
                              <img src="{{ asset('storage/' . Auth::user()->client->first()->pfp) }}" alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                              <div class="d-flex justify-content-center mb-2">
                                 <div class="image-upload">
                                    <label for="file-input" style="font-size: 18px;">
                                       <i class="uil uil-image-upload"></i>
                                       <span>Change Photo</span>
                                    </label>
                                    <input id="file-input" type="file" style="display:none" name="pfp" />
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="fb">Facebook Url:</label>
                           <input type="text" class="form-control" id="fb" name="fb"
                              value="{{Auth::user()->client->first()->fb}}">
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="twitter">Twitter Url:</label>
                           <input type="text" class="form-control" id="twitter" name="twitter"
                              value="{{Auth::user()->client->first()->twitter}}">
                        </div>
                        <div class=" form-group">
                           <label class="form-label" for="insta">Instagram Url:</label>
                           <input type="text" class="form-control" id="insta" name="insta"
                              value="{{Auth::user()->client->first()->insta}}">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Edit User Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">

                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label class="form-label" for="name">Full Name:</label>
                                 <input type="text" class="form-control" id="name" name="name"
                                    value="{{Auth::user()->client->first()->name}}">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="contact">Contact Number:</label>
                                 <input type="text" class="form-control" id="contact" name="contact"
                                    value="{{ Auth::user()->client->first()->contact }}">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="email">Email:</label>
                                 <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::user()->client->first()->email }}">
                              </div>
                              <div class="form-group col-md-12">
                                 <label class="form-label" for="address">Address:</label>
                                 <input type="text" class="form-control" id="address" name="address"
                                    value="{{ Auth::user()->client->first()->address }}">
                              </div>
                           </div>
                           <div class="d-flex justify-content-center gap-3">
                              <a class="btn btn-secondary text-white">Discard Changes</a>
                              <a class="btn btn-danger mx-3 text-white" data-bs-toggle="modal"
                                 data-bs-target="#changePasswordModal">Change Password</a>
                              <button type="submit" class="btn btn-primary">Save Changes</button>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>



<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="card-title">Change Password</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form method="POST" action="{{ route('password/update') }}">
            @csrf
            <div class="modal-body">
               <div class="row">
                  <div class="form-group col-md-12">
                     <label class="form-label" for="uname">Password:</label>
                     <input type="password" class="form-control" id="current_password" name="current_password"
                        placeholder="Current Password">
                     @if ($errors->has('current_password'))
                     <span class="text-danger "><em>{{ $errors->first('current_password') }}</em></span>
                     @endif
                  </div>
                  <div class="form-group col-md-12">
                     <label class="form-label" for="pass">New Password:</label>
                     <input type="password" class="form-control" id="new_password" name="new_password"
                        placeholder="New Password">
                     @if ($errors->has('new_password'))
                     <span class="text-danger "><em>{{ $errors->first('new_password') }}</em></span>
                     @endif
                  </div>
                  <div class="form-group col-md-12">
                     <label class="form-label" for="rpass">Confirm New Password:</label>
                     <input type="password" class="form-control" id="new_password_confirmation"
                        name="new_password_confirmation" placeholder="Repeat Password ">
                  </div>
               </div>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection

@section('scripts')
<!-- Library Bundle Script -->
<script src="{{asset('assets/js/core/libs.min.js')}}"></script>

<!-- External Library Bundle Script -->
<script src="{{asset('assets/js/core/external.min.js')}}"></script>

<!-- Widgetchart Script -->
<script src="{{asset('assets/js/charts/widgetcharts.js')}}"></script>

<!-- mapchart Script -->
<script src="{{asset('assets/js/charts/vectore-chart.js')}}"></script>
<script src="{{asset('assets/js/charts/dashboard.js')}}"></script>

<!-- fslightbox Script -->
<script src="{{asset('assets/js/plugins/fslightbox.js')}}"></script>

<!-- Settings Script -->
<script src="{{asset('assets/js/plugins/setting.js')}}"></script>

<!-- Slider-tab Script -->
<script src="{{asset('assets/js/plugins/slider-tabs.js')}}"></script>

<!-- Form Wizard Script -->
<script src="{{asset('assets/js/plugins/form-wizard.js')}}"></script>

<!-- AOS Animation Plugin-->
<script src="{{asset('assets/vendor/aos/dist/aos.js')}}"></script>

<!-- App Script -->
<script src="{{asset('assets/js/hope-ui.js')}}" defer></script>
@endsection