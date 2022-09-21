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
    <link rel="stylesheet" href="{{asset('assets/vendor/choiceJS/style/choices.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.css')}}" />

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
                        <h4 class="mb-0">Booking Records</h4>
                    </div>
                    @if (Auth::user()->usertype === 'admin')
                    <div class="card-action mt-2 mt-sm-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addBookingModal">
                            + Add Booking
                        </button>
                    </div>
                    @endif
                </div>
                <div class="card-body px-0">
                    <div class="table-responsive">
                        <table id="user-list-table" class="table " role="grid" data-toggle="data-table">
                            <thead>
                                <tr class="light">
                                    <th>Event Name</th>
                                    <th>Venue</th>
                                    <th>Assigned</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    @if (Auth::user()->usertype === 'admin')
                                    <th style="min-width: 100px">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->name }}</td>
                                    <td>{{ $booking->venue }}</td>
                                    <td>

                                        @foreach ($bookingEmployees->where('booking_id', '=',
                                        $booking->id)
                                        as $bookingEmployee)
                                        <img src="{{ asset('storage/' . App\Models\Employee::find($bookingEmployee->employee_id)->pfp) }}"
                                            alt="" class="img-fluid avatar-40 avatar-rounded shadow"
                                            style="margin:-8px;">

                                        @endforeach
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($booking->date_start )->format('M d, y') }},
                                        {{ \Carbon\Carbon::parse($booking->time_start )->format('g:i A') }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($booking->date_end )->format('M d, y') }},
                                        {{ \Carbon\Carbon::parse($booking->time_end )->format('g:i A') }}
                                    </td>
                                    @if (Auth::user()->usertype === 'admin')
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                data-bs-toggle="modal" data-bs-target="#editBookingModal"
                                                data-placement="top" title="" data-original-title="Edit"
                                                data-booking-id="{{ $booking->id }}"
                                                data-booking-name="{{ $booking->name }}"
                                                data-booking-datestart="{{ $booking->date_start }}"
                                                data-booking-dateend="{{ $booking->date_end }}"
                                                data-booking-timestart="{{ $booking->time_start }}"
                                                data-booking-timeend="{{ $booking->time_end }}"
                                                data-booking-client="{{ $booking->client->name }}"
                                                data-booking-clientid="{{ $booking->client_id}}"
                                                data-booking-venue="{{ $booking->venue }}" href="#">
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
                                                data-bs-target="#deleteBookingModal" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Delete"
                                                data-booking-id="{{ $booking->id }}"
                                                data-booking-name-delete="{{ $booking->name }}" href="#">
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

{{-- add modal --}}
<div class="modal fade" id="addBookingModal" data-bs-keyboard="true" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add-form" action="{{ route('admin/booking/store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-start">
                        <div class=" w-100" id="v-pills-tabContent">
                            <div class="fade active show" id="-3">

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label for="name" class="col-form-label">Title</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Event Title">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label for="start_date" class="col-form-label">
                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.09265 9.40427H20.9166" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.4421 13.3097H16.4514" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0046 13.3097H12.0139" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.5579 13.3097H7.56717" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.4421 17.1962H16.4514" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0046 17.1962H12.0139" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.5579 17.1962H7.56717" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.0437 2V5.29078" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.96552 2V5.29078" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" name="start_date" id="start_date"
                                            class="form-control date_flatpicker" placeholder="Select Start Date ">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" name="end_date" id="end_date"
                                            class="form-control date_flatpicker" placeholder="Select End Date ">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M21.2498 12.0005C21.2498 17.1095 17.1088 21.2505 11.9998 21.2505C6.8908 21.2505 2.7498 17.1095 2.7498 12.0005C2.7498 6.89149 6.8908 2.75049 11.9998 2.75049C17.1088 2.75049 21.2498 6.89149 21.2498 12.0005Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M15.4314 14.9429L11.6614 12.6939V7.84689" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-10 d-flex align-items-center justify-content-center">
                                        <input type="text" name="start_time" class="form-control time_flatpicker"
                                            placeholder="Time Start ">
                                        <span class="mx-2">To</span>
                                        <input type="text" name="end_time" class="form-control time_flatpicker"
                                            placeholder="Time End">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-32" width="28" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z"
                                                    stroke="currentColor" stroke-width="1.42857" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-10">
                                        <select name="client" class="form-select choices-multiple-remove-button">
                                            <option value="null">Select Client</option>
                                            @foreach ($clients as $client)
                                            <option value="{{ $client->id}}">{{ $client->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">

                                            <svg class="icon-32" width="29" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </label>
                                    </div>
                                    <div class="col-10">
                                        <select name="employees[]" class="form-select choices-multiple-remove-button"
                                            multiple>
                                            @foreach ($employees as $employee)
                                            <option value="{{ $employee->id}}">{{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-32" width="27" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="venue" class="form-control" placeholder="Venue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard
                        Changes</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- edit modal --}}
<div class="modal fade" id="editBookingModal" data-bs-keyboard="true" tabindex="-1" aria-labelledby="edit-appointment"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin/booking/update') }}" method="post" id="edit-form">
                    @csrf
                    <div class="d-flex flex-column align-items-start">
                        <div class=" w-100" id="app-pills-tabContent">
                            <div class="fade active show" id="v-pills-home-3">
                                <input type="hidden" name="id" id="id">
                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label for="title" class="col-form-label">Title</label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" id="name" name="name" class="form-control"
                                            aria-describedby="title-drop-1">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.09265 9.40427H20.9166" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.4421 13.3097H16.4514" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0046 13.3097H12.0139" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.5579 13.3097H7.56717" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.4421 17.1962H16.4514" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.0046 17.1962H12.0139" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.5579 17.1962H7.56717" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.0437 2V5.29078" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.96552 2V5.29078" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" name="start_date" class="form-control date_flatpicker"
                                            placeholder="Select Start Date ">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" name="end_date" class="form-control date_flatpicker"
                                            placeholder="Select End Date ">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M21.2498 12.0005C21.2498 17.1095 17.1088 21.2505 11.9998 21.2505C6.8908 21.2505 2.7498 17.1095 2.7498 12.0005C2.7498 6.89149 6.8908 2.75049 11.9998 2.75049C17.1088 2.75049 21.2498 6.89149 21.2498 12.0005Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M15.4314 14.9429L11.6614 12.6939V7.84689" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-10 d-flex align-items-center justify-content-center">
                                        <input type="text" name="start_time" class="form-control time_flatpicker">
                                        <span class="mx-2">To</span>
                                        <input type="text" name="end_time" class="form-control time_flatpicker">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-32" width="28" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z"
                                                    stroke="currentColor" stroke-width="1.42857" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-10">
                                        <input id="client" name="client" class="form-control"
                                            aria-describedby="title-drop-1">
                                        <input type="hidden" name="clientid" id="clientid">
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-32" width="29" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>

                                        </label>
                                    </div>
                                    <div class="col-10">
                                        <select name="employees[]" class="form-select choices-multiple-remove-button"
                                            multiple>
                                            @foreach ($employees as $employee)
                                            <option value="{{ $employee->id}}">{{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-3 align-items-center form-group">
                                    <div class="col-2">
                                        <label class="col-form-label">
                                            <svg class="icon-32" width="26" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="venue" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('admin/calendar/delete') }}" method="post" id="delete-form">
                    @csrf
                    <input type="hidden" name="iddelete" id="iddelete">
                </form>
            </div>
            @if (Auth::user()->usertype === 'admin')
            <div class="modal-footer border-0">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard
                    Changes</button>
                <button type="submit" form="edit-form" class="btn btn-primary" data-bs-dismiss="modal" name="save">Save
                    Booking</button>
            </div>
            @endif
        </div>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteBookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin/booking/delete') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to <strong class="text-danger">DELETE</strong> <strong
                            id="booking-name-delete" class="text-dark"></strong>
                        booking?</p>
                    <input type="hidden" id="bookingIDDelete" name="bookingIDDelete" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">DELETE</button>
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

<!-- Choisejs Script -->
<script src="{{asset('assets/vendor/choiceJS/script/choices.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/choice.js')}}" defer></script>

<!-- Flatpickr Script -->
<script src="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/flatpickr.js')}}" defer></script>

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
    $('#deleteBookingModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('booking-id');
    var bookingname = $(e.relatedTarget).data('booking-name-delete');

    $(e.currentTarget).find('input[name="bookingIDDelete"]').val(id);
    $(e.currentTarget).find('#booking-name-delete').text(bookingname);
});
   
$('#editBookingModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('booking-id');
    var name = $(e.relatedTarget).data('booking-name');
    var datestart = $(e.relatedTarget).data('booking-datestart');
    var dateend = $(e.relatedTarget).data('booking-dateend');
    var timestart = $(e.relatedTarget).data('booking-timestart');
    var timeend = $(e.relatedTarget).data('booking-timeend');
    var client = $(e.relatedTarget).data('booking-client');
    var clientid = $(e.relatedTarget).data('booking-clientid');
    var venue = $(e.relatedTarget).data('booking-venue');

  
    $(e.currentTarget).find('input[name="id"]').val(id);
    $(e.currentTarget).find('input[name="name"]').val(name);
    $(e.currentTarget).find('input[name="start_date"]').val(datestart);
    $(e.currentTarget).find('input[name="end_date"]').val(dateend);
    $(e.currentTarget).find('input[name="start_time"]').val(timestart);
    $(e.currentTarget).find('input[name="end_time"]').val(timeend);
    $(e.currentTarget).find('input[name="client"]').val(client);
    $(e.currentTarget).find('input[name="clientid"]').val(clientid);
    $(e.currentTarget).find('input[name="end_date"]').val(dateend);
    $(e.currentTarget).find('input[name="venue"]').val(venue);
});
</script>
@endsection