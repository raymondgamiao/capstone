@extends('admin/layout')

@section('head')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title}}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon2.png')}}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=1.2.0')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=1.2.0')}}" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}" />
</head>
@endsection

@section('content')
<div class="container-fluid content-inner mt-5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Item Inventory</h4>
                    </div>
                    <div class="card-action mt-2 mt-sm-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            + Add Item
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive ml-5">
                        <table id="datatable" class="table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Branch</th>
                                    <th>Category</th>
                                    <th style="min-width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{
                                        $item->description }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->branch_name }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-placement="top" title="" data-original-title="Edit" href="#">
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
                                                data-bs-target="#exampleModaldelete" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Delete" href="#">
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">InventoryID</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Name</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>


                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Description</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Quantity</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Branch</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select" name="branch_id">
                            <option selected value="none">Select Branch</option>
                            @foreach ($branches as $branch)
                            <option value={{ $branch->id }}>{{ $branch->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Category</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select" name="branch_id">
                            <option selected value="none">Select Category</option>
                            @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </div>
</div>

{{-- EDIT CHANGES MODAL --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">InventoryID</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Name</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>


                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Description</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Quantity</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Branch</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>

                <div class="row g-1 align-items-center form-group">
                    <div class="col-3">
                        <label for="addtitle" class="col-form-label">Category</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="addtitle" class="form-control" aria-describedby="addtitle">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Delete Item</button>
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