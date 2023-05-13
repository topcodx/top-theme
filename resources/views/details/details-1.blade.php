@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">New Employee Payrolls</h1>
            <div class="text-end mt-4 mt-md-0">
                <button type="button" class="btn btn-outline-primary">Back</button>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
                            <label for="name" class="pb-2 fs-5 text-gray-600">Bed Type:</label>
                            <span class="fs-5 text-gray-800">Free General Ward</span>
                        </div>
                        <div class="col-md-6 d-flex flex-column mb-md-10 mb-5">
                            <label for="name" class="pb-2 fs-5 text-gray-600">Description:</label>
                            <span class="fs-5 text-gray-800">Only for Female</span>
                        </div>
                        <div class="col-md-6 d-flex flex-column mb-md-0 mb-5">
                            <label for="name" class="pb-2 fs-5 text-gray-600">Created On:</label>
                            <span class="fs-5 text-gray-800">2 months ago</span>
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <label for="name" class="pb-2 fs-5 text-gray-600">Last Updated:</label>
                            <span class="fs-5 text-gray-800">2 months ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
