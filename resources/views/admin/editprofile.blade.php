@extends('admin/layout')

@section('head')

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title></title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

   <!-- Library / Plugin Css Build -->
   <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />

   <!-- Hope Ui Design System Css -->
   <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=1.2.0')}}" />

   <!-- Custom Css -->
   <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=1.2.0')}}" />

   <!-- Dark Css -->
   <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}" />

   <!-- Customizer Css -->
   <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" />

   <link rel="stylesheet" href="{{asset('assets/vendor/choiceJS/style/choices.min.css')}}" />

   <!-- RTL Css -->
   <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}" />

</head>
@endsection

@section('content')
<div class="container content-inner mt-n5 py-0">
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
      <form method="POST" action="{{ route('admin/profile/update') }}" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-xl-3 col-lg-4">
               <div class="card">
                  <div class="card-body">
                     <div class="card mb-4">
                        <div class="card-body text-center">
                           <img src="{{ asset('storage/' .  Auth::user()->employee->first()->pfp) }}" alt="avatar"
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
                           value="{{ Auth::user()->employee->first()->fb }}">
                     </div>
                     <div class="form-group">
                        <label class="form-label" for="twitter">Twitter Url:</label>
                        <input type="text" class="form-control" id="twitter" name="twitter"
                           value="{{ Auth::user()->employee->first()->twitter }}">
                     </div>
                     <div class="form-group">
                        <label class="form-label" for="insta">Instagram Url:</label>
                        <input type="text" class="form-control" id="insta" name="insta"
                           value="{{ Auth::user()->employee->first()->insta }}">
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
                                 value="{{ Auth::user()->employee->first()->name }}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="sss">SSS ID (Social Security System)</label>
                              <input type="text" class="form-control" id="sss" name="sss"
                                 value="{{ Auth::user()->employee->first()->sss }}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="philhealth">PhilHealth ID</label>
                              <input type="text" class="form-control" id="philhealth" name="philhealth"
                                 value="{{ Auth::user()->employee->first()->philhealth }}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="pagibig">Pag-Ibig ID</label>
                              <input type="text" class="form-control" id="pagibig" name="pagibig"
                                 value="{{ Auth::user()->employee->first()->pagibig }}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="bankacct">Bank Account (BDO, BPI, RCBC, Metro Bank)</label>
                              <input type="text" class="form-control" id="bankacct" name="bankacct"
                                 value="{{ Auth::user()->employee->first()->bankacct }}">
                           </div>

                           <div class="form-group col-md-6">
                              <label class="form-label" for="contact">Contact Number:</label>
                              <input type="text" class="form-control" id="contact" name="contact"
                                 value="{{ Auth::user()->employee->first()->contact }}">
                           </div>
                           <div class="form-group col-md-6">
                              <label class="form-label" for="email">Email:</label>
                              <input type="email" class="form-control" id="email" name="email"
                                 value="{{ Auth::user()->employee->first()->email }}">
                           </div>
                           <div class="form-group col-md-12">
                              <label class="form-label" for="address">Address:</label>
                              <input type="text" class="form-control" id="address" name="address"
                                 value="{{ Auth::user()->employee->first()->address }}">
                           </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                           <a class="btn btn-secondary">Discard Changes</a>
                           <a class="btn btn-warning" data-bs-toggle="modal"
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
                     <label class="form-label" for="current-password">Password:</label>
                     <input id="current_password" type="password" class="form-control" name="current_password" required
                        placeholder="Current Password">
                     @if ($errors->has('current_password'))
                     <span class="text-danger "><em>{{ $errors->first('current_password') }}</em></span>
                     @endif
                  </div>
                  <div class="form-group col-md-12">
                     <label class="form-label" for="new_password">New Password:</label>
                     <input type="password" class="form-control" id="new_password" name="new_password" required
                        placeholder="New Password">
                     @if ($errors->has('new_password'))
                     <span class="text-danger "><em>{{ $errors->first('new_password') }}</em></span>
                     @endif
                  </div>
                  <div class="form-group col-md-12">
                     <label class="form-label" for="new_password_confirmation">Confirm New Password:</label>
                     <input type="password" class="form-control" id="new_password_confirmation" required
                        name="new_password_confirmation" placeholder="Confirm New Password">
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