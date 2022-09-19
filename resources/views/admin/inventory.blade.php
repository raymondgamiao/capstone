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

    {{-- alpine js --}}
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
@endsection

@section('content')
<div class="container-fluid content-inner mt-5 py-0">
    <div class="row">
        <div class="col-sm-12">
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
                        <h4 class="mb-0">Item Inventory</h4>
                    </div>
                    @if (Auth::user()->usertype === 'admin')
                    <div class="card-action mt-2 mt-sm-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addInventoryModal">
                            + Add Item
                        </button>
                    </div>
                    @endif
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
                                    @if (Auth::user()->usertype === 'admin')
                                    <th style="min-width: 100px">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{
                                        $item->description }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->branch->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    @if (Auth::user()->usertype === 'admin')
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#editInventoryModal"
                                                data-placement="top" title="" data-original-title="Edit"
                                                data-inventory-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                data-description="{{ $item->description }}" data-qty="{{ $item->qty }}"
                                                data-branch-id="{{ $item->branch_id }}"
                                                data-branch-name="{{ $item->branch->name }}"
                                                data-category-id="{{ $item->category_id }}"
                                                data-category-name="{{ $item->category->name }}" href="#">
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
                                                data-bs-target="#deleteInventoryModal" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Delete"
                                                data-inventory-id="{{ $item->id }}"
                                                data-inventory-name-delete="{{ $item->name }}" href="#">
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
<div class="modal fade" id="addInventoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin/inventory/store') }}">
                <div class="modal-body">
                    @csrf
                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="name" class="col-form-label">Item Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="name" name="name" class="form-control" value={{old('name')}}>
                        </div>
                        @error('name')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="description" class="col-form-label">Item Description</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="description" name="description" class="form-control"
                                value={{old('description')}}>
                        </div>
                        @error('description')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror

                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="qty" class="col-form-label">Quantity</label>
                        </div>
                        <div class="col-8">
                            <input type="number" id="qty" name="qty" class="form-control" value={{old('qty')}}>
                        </div>
                        @error('qty')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="branch_id" class="col-form-label">Branch</label>
                        </div>
                        <div class="col-8">
                            <select class="form-select" name="branch_id">
                                <option selected value="none">Select Branch</option>
                                @foreach ($branches as $branch)
                                <option value={{ $branch->id }}>{{ $branch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('branch_id')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="category_id" class="col-form-label">Category</label>
                        </div>
                        <div class="col-8">
                            <select class="form-select" name="category_id">
                                <option selected value="none">Select Category</option>
                                @foreach ($categories as $category)
                                <option value={{ $category->id }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Item </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- EDIT CHANGES MODAL --}}
<div class="modal fade" id="editInventoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin/inventory/update') }}">
                <div class="modal-body">
                    @csrf
                    <div class="row g-1 align-items-center form-group">
                        <input type="hidden" id="inventoryIDEdit" name="inventoryIDEdit" class="form-control">
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="nameEdit" class="col-form-label">Name</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="nameEdit" name="nameEdit" class="form-control">
                        </div>
                        @error('nameEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="descriptionEdit" class="col-form-label">Description</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="descriptionEdit" name="descriptionEdit" class="form-control">
                        </div>
                        @error('descriptionEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="quantityEdit" class="col-form-label">Quantity</label>
                        </div>
                        <div class="col-8">
                            <input type="number" id="quantityEdit" name="quantityEdit" class="form-control">
                        </div>
                        @error('quantityEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="branch_idEdit" class="col-form-label">Branch</label>
                        </div>
                        <div class="col-8">
                            <select class="form-select" name="branch_idEdit">
                                <option selected id="branch_idEdit"></option>
                                @foreach ($branches as $branch)
                                <option value={{ $branch->id }}>{{ $branch->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('branch_idEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>

                    <div class="row g-1 align-items-center form-group">
                        <div class="col-3">
                            <label for="category_idEdit" class="col-form-label">Category</label>
                        </div>
                        <div class="col-8">
                            <select class="form-select" name="category_idEdit">
                                <option selected id="category_idEdit"></option>
                                @foreach ($categories as $category)
                                <option value={{ $category->id }}>{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_idEdit')
                        <span class="text-danger "><em>{{$message}}</em></span>
                        @enderror
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit Item </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteInventoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin/inventory/delete') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to <strong class="text-danger">DELETE</strong> Item <strong
                            id="inventory-name-delete" class="text-dark"></strong>?</p>
                    <input type="hidden" id="inventoryIDDelete" name="inventoryIDDelete" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Inventory</button>
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
    $('#deleteInventoryModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('inventory-id');
    var inventoryname = $(e.relatedTarget).data('inventory-name-delete');

    $(e.currentTarget).find('input[name="inventoryIDDelete"]').val(id);
    $(e.currentTarget).find('#inventory-name-delete').text(inventoryname);
});

$('#editInventoryModal').on('show.bs.modal', function(e) {
    var inventoryID = $(e.relatedTarget).data('inventory-id');
    var name = $(e.relatedTarget).data('name');
    var description = $(e.relatedTarget).data('description');
    var qty = $(e.relatedTarget).data('qty');
    var branchID = $(e.relatedTarget).data('branch-id');
    var branch = $(e.relatedTarget).data('branch-name');
    var categoryID = $(e.relatedTarget).data('category-id');
    var category = $(e.relatedTarget).data('category-name');


    $(e.currentTarget).find('input[name="inventoryIDEdit"]').val(inventoryID);
    $(e.currentTarget).find('input[name="nameEdit"]').val(name);
    $(e.currentTarget).find('input[name="descriptionEdit"]').val(description);
    $(e.currentTarget).find('input[name="quantityEdit"]').val(qty);
    $(e.currentTarget).find('#branch_idEdit').val(branchID);
    $(e.currentTarget).find('#branch_idEdit').text(branch);
    $(e.currentTarget).find('#category_idEdit').val(categoryID);
    $(e.currentTarget).find('#category_idEdit').text(category);


});
</script>

@endsection