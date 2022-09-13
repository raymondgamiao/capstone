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
          <div class="row">
            <div class="col-xl-3 col-lg-4">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Hi Mondi</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <form>
                      <div class="card mb-4">
                        <div class="card-body text-center">
                          <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t1.6435-9/171785206_3390526557715046_3812550295121864105_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFwK6hWwQReBADxLFHPbNMHuGUaMnGk3JG4ZRoycaTckesM1ZaNNGJSdrXb4BbZwaBHNLZQFxtByPFEL-VLLp8R&_nc_ohc=Z5qvEtek6ywAX_JthJa&_nc_ht=scontent.fdvo2-2.fna&oh=00_AT9TmDG9BV7UdzFpc9quFd8bqXYVjK8Ittxmr3UuipXkAA&oe=6342CAC4" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                          <h5 class="my-3">Mondi Gamiao</h5>
                          <p class="text-muted mb-1">Full Stack Developer</p>
                          <p class="text-muted mb-4">Manila, California</p>
                          <div class="d-flex justify-content-center mb-2">
                            <div class="image-upload">
                              <label for="file-input" style="font-size: 18px;">
                                <i class="uil uil-image-upload"></i>
                                <span>Change Profile</span>
                              </label>
                              <input id="file-input" type="file" style="display:none" />
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                           <label class="form-label">User Role:</label>
                           <select name="type" class="selectpicker form-control" data-style="py-0">
                              <option>Select</option>
                              <option>Admin</option>
                              <option>Photographer</option>
                              <option>Singer</option>
                              <option>Killer</option>
                              <option>Dancer</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="furl">Facebook Url:</label>
                           <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="turl">Twitter Url:</label>
                           <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="instaurl">Instagram Url:</label>
                           <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                        </div>
                     </form>
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
                        <form>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">First Name:</label>
                                 <input type="text" class="form-control" id="fname" placeholder="First Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Last Name:</label>
                                 <input type="text" class="form-control" id="lname" placeholder="Last Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="add1">SSS ID (Social Security System)</label>
                                 <input type="text" class="form-control" id="add1" placeholder="0000000">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="add2">PhilHealth ID</label>
                                 <input type="text" class="form-control" id="add2" placeholder="000000">
                              </div>
                              <div class="form-group col-md-6">
                                <label class="form-label" for="add2">Pag-Ibig ID</label>
                                <input type="text" class="form-control" id="add2" placeholder="0000000">
                             </div>
                             <div class="form-group col-md-6">
                              <label class="form-label" for="add2">Bank Account (BDO, BPI, RCBC, Metro Bank)</label>
                              <input type="text" class="form-control" id="add2" placeholder="00000000">
                           </div>
                             
                              <div class="form-group col-sm-12">
                                 <label class="form-label">Select Branch:</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Manila</option>
                                    <option>Taguig</option>
                                    <option>Makati</option>
                                    <option >Marikina</option>
                                    <option>Pampanga</option>
                                    <option>Bataan</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="mobno">Mobile Number:</label>
                                 <input type="text" class="form-control" id="mobno" placeholder="Mobile Number">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="email">Email:</label>
                                 <input type="email" class="form-control" id="email" placeholder="Email">
                              </div>
                           </div>
                           <hr>
                           <h5 class="mb-3">Change Password</h5>
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label class="form-label" for="uname">User Name:</label>
                                 <input type="text" class="form-control" id="uname" placeholder="User Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="pass">Password:</label>
                                 <input type="password" class="form-control" id="pass" placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="rpass">Confirm Password:</label>
                                 <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                              </div>
                           </div>
                           <div class="checkbox">
                              <label class="form-label"><input class="form-check-input me-2" type="checkbox" value="" id="flexchexked">Enable Two-Factor-Authentication</label>
                           </div>
                           <button type="submit" class="btn btn-primary">Discard Changes</button>
                           <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
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