@extends('admin/layout')

@section('head')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title}}</title>
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

    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
@endsection

@section('content')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if ($errors->any())
                <div x-data="{show: true}" class="alert alert-danger card-action " role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session()->has('success'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Branch List</h4>
                    </div>
                    @if (Auth::user()->usertype === 'admin')
                    <div class="card-action mt-2 mt-sm-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addBranchModal">
                            + Add Branch
                        </button>
                    </div>
                    @endif

                </div>
                <div class="card-body px-0">
                    <div class="table-responsive">
                        <table id="user-list-table" class="table " role="grid" data-toggle="data-table">
                            <thead>
                                <tr class="light">
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    @if (Auth::user()->usertype === 'admin')
                                    <th style="min-width: 100px">Action</th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branches as $branch)
                                <tr>
                                    <td>{{ $branch->name }}</td>
                                    <td>{{ $branch->location }}</td>
                                    <td>{{ $branch->email }}</td>
                                    <td>{{ $branch->contact }}</td>
                                    @if (Auth::user()->usertype === 'admin')
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#editBranchModal"
                                                data-placement="top" title="" data-original-title="Edit"
                                                data-branch-id="{{ $branch->id }}"
                                                data-branch-name="{{ $branch->name }}"
                                                data-branch-location="{{ $branch->location }}"
                                                data-branch-email="{{ $branch->email }}"
                                                data-branch-contact="{{ $branch->contact }}" href="#">
                                                <span class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteBranchModal" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Delete"
                                                data-branch-id="{{ $branch->id }}"
                                                data-branch-name-delete="{{ $branch->name }}" href="#">
                                                <span class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                        <path
                                                            d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal add item --}}
<div class="modal fade" id="addBranchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Branch</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin/branches/store') }}">
                <div class="modal-body">
                    @csrf
                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="name" class="col-form-label">BranchName</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="name" name="name" class="form-control" aria-describedby="addtitle"
                                value={{old('name')}}>
                        </div>
                        @error('company')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="location" class="col-form-label">Location</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="location" name="location" class="form-control"
                                aria-describedby="addtitle" value={{old('location')}}>
                        </div>
                        @error('company')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-8">
                            <input type="email" id="email" name="email" class="form-control" aria-describedby="addtitle"
                                value={{old('email')}}>
                        </div>
                        @error('company')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="contact" class="col-form-label">Contact</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="contact" name="contact" class="form-control"
                                aria-describedby="addtitle" value={{old('contact')}}>
                        </div>
                        @error('company')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Branch </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- EDIT CHANGES MODAL --}}
<div class="modal fade" id="editBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin/branches/update') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row g-1 align-items-center form-group">
                        <input type="hidden" id="branchIDEdit" name="branchIDEdit" class="form-control" hidden>
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="branchNameEdit" class="col-form-label">Branch Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="branchNameEdit" name="branchNameEdit" class="form-control">
                        </div>
                        @error('branchNameEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="branchLocationEdit" class="col-form-label">Branch Location</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="branchLocationEdit" name="branchLocationEdit" class="form-control">
                        </div>
                        @error('branchLocationEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="branchEmailEdit" class="col-form-label">Branch Email</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="branchEmailEdit" name="branchEmailEdit" class="form-control">
                        </div>
                        @error('branchEmailEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="branchContactEdit" class="col-form-label">Branch Contact</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="branchContactEdit" name="branchContactEdit" class="form-control">
                        </div>
                        @error('branchContactEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
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

{{-- Delete Modal --}}
<div class="modal fade" id="deleteBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin/branches/delete') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to <strong class="text-danger">DELETE</strong> <strong
                            id="branch-name-delete" class="text-dark"></strong>
                        Branch?</p>
                    <p>
                        <span class="text-danger ">
                            <em>WARNING: This will also delete ALL inventory items and Users
                                registered to this branch</em>
                        </span>
                    </p>
                    <input type="hidden" id="branchIDDelete" name="branchIDDelete" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Branch</button>
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

<script>
    $('#deleteBranchModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('branch-id');
    var branchname = $(e.relatedTarget).data('branch-name-delete');

    $(e.currentTarget).find('input[name="branchIDDelete"]').val(id);
    $(e.currentTarget).find('#branch-name-delete').text(branchname);
});
   
$('#editBranchModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('branch-id');
    var branchname = $(e.relatedTarget).data('branch-name');
    var branchlocation = $(e.relatedTarget).data('branch-location');
    var branchemail = $(e.relatedTarget).data('branch-email');
    var branchcontact = $(e.relatedTarget).data('branch-contact');
  
    $(e.currentTarget).find('input[name="branchIDEdit"]').val(id);
    $(e.currentTarget).find('input[name="branchNameEdit"]').val(branchname);
    $(e.currentTarget).find('input[name="branchLocationEdit"]').val(branchlocation);
    $(e.currentTarget).find('input[name="branchEmailEdit"]').val(branchemail);
    $(e.currentTarget).find('input[name="branchContactEdit"]').val(branchcontact);
});
</script>
@endsection