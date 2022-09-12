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
                        <h4 class="mb-0"> Gallery Albums </h4>
                    </div>
                    <div class="card-action mt-2 mt-sm-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addAlbumModal">
                            + Add Album
                        </button>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="table-responsive">
                        <table id="user-list-table" class="table " role="grid" data-toggle="data-table">
                            <thead>
                                <tr class="light">
                                    <th>Album Name</th>
                                    <th>Thumbnail</th>
                                    <th>Cover</th>
                                    <th>Date</th>
                                    <th>URL</th>
                                    <th style="min-width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->album_name }}</td>
                                    <td><img src="{{asset( $gallery->album_cover )}}" alt="sad" width="50px"></td>
                                    <td>{{ $gallery->album_cover }}</td>
                                    <td>{{ $gallery->album_date }}</td>
                                    <td>{{ $gallery->album_url }}</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#editAlbumModal"
                                                data-album-id="{{ $gallery->id }}"
                                                data-album-name="{{ $gallery->album_name }}"
                                                data-album-cover="{{ $gallery->album_cover }}"
                                                data-album-url="{{ $gallery->album_url }}"
                                                data-album-date="{{ $gallery->album_date }}" href="#">
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
                                                data-bs-target="#deleteAlbumModal" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Delete"
                                                data-album-id="{{ $gallery->id }}"
                                                data-album-name-delete="{{ $gallery->album_name }}" href="#">
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
<div class="modal fade" id="addAlbumModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Album</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin/gallery/store') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_name" class="col-form-label">Album Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="album_name" name="album_name" class="form-control"
                                aria-describedby="addtitle" value={{old('album_name')}}>
                        </div>
                        @error('album_name')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_cover" class="col-form-label">Cover Image</label>
                        </div>
                        <div class="col-8">
                            <input type="file" id="album_cover" name="album_cover" class="form-control"
                                aria-describedby="addtitle" value={{old('album_cover')}}>
                        </div>
                        @error('album_cover')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror

                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="date" class="col-form-label">Event Date</label>
                        </div>
                        <div class="col-8">
                            <input type="date" id="album_date" name="album_date" class="form-control"
                                aria-describedby="addtitle" value={{old('date')}}>
                        </div>
                        @error('album_date')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>


                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_url" class="col-form-label">Album URL</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="album_url" name="album_url" class="form-control"
                                aria-describedby="addtitle" value={{old('album_url')}}>
                        </div>
                        @error('album_url')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Album </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- EDIT CHANGES MODAL --}}
<div class="modal fade" id="editAlbumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin/gallery/update') }}">
                <div class="modal-body">
                    @csrf
                    <div class="row g-1 align-items-center form-group">
                        <input type="hidden" id="album_IDEdit" name="album_IDEdit" class="form-control">
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_nameEdit" class="col-form-label">Album Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="album_nameEdit" name="album_nameEdit" class="form-control">
                        </div>
                        @error('album_nameEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_coverEdit" class="col-form-label">Album Cover</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="album_nameEdit" name="album_coverEdit" class="form-control">
                        </div>
                        @error('album_coverEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_dateEdit" class="col-form-label">Album Date</label>
                        </div>
                        <div class="col-8">
                            <input type="date" id="album_dateEdit" name="album_dateEdit" class="form-control">
                        </div>
                        @error('album_dateEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="album_urlEdit" class="col-form-label">Album URL</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="album_urlEdit" name="album_urlEdit" class="form-control">
                        </div>
                        @error('album_urlEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit Album </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteAlbumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin/gallery/delete') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Album</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to <strong class="text-danger">DELETE</strong> the Album <strong
                            id="album-name-delete" class="text-dark"></strong>?</p>
                    <input type="hidden" id="albumIDDelete" name="albumIDDelete" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Album</button>
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
    $('#deleteAlbumModal').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('album-id');
        var albumname = $(e.relatedTarget).data('album-name-delete');

        $(e.currentTarget).find('input[name="albumIDDelete"]').val(id);
        $(e.currentTarget).find('#album-name-delete').text(albumname);
    });

    $('#editAlbumModal').on('show.bs.modal', function(e) {
        var album_id = $(e.relatedTarget).data('album-id');
        var album_name = $(e.relatedTarget).data('album-name');
        var album_cover = $(e.relatedTarget).data('album-cover');
        var album_url = $(e.relatedTarget).data('album-url');
        var album_date = $(e.relatedTarget).data('album-date');

        $(e.currentTarget).find('input[name="album_IDEdit"]').val(album_id);
        $(e.currentTarget).find('input[name="album_nameEdit"]').val(album_name);
        $(e.currentTarget).find('input[name="album_coverEdit"]').val(album_cover);
        $(e.currentTarget).find('input[name="album_urlEdit"]').val(album_url);
        $(e.currentTarget).find('input[name="album_dateEdit"]').val(album_date);
    });

</script>

@endsection