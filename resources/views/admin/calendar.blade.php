@extends('admin/layout')

@section('content')
<div class="container content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title mb-0 px-5">
                            <h4 class="mb-0">Calender</h4>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn btn-primary" role="button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card  ">
                            <div class="card-body">
                                <div id="calendar1" class="calendar-s"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection