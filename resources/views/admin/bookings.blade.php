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
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Booking Records</h4>
                    </div>
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