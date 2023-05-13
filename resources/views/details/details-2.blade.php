@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Doctor Details</h1>
            <div class="text-end mt-4 mt-md-0">
                <button type="button" class="btn btn-primary me-4">Edit</button>
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
                        <div class="col-xxl-5 col-12">
                            <div class="d-sm-flex align-items-center mb-5 mb-xxl-0 text-center text-sm-start">
                                <div class="image image-circle image-small">
                                    <img src="{{asset('images/avatar.png')}}" alt="user">
                                </div>
                                <div class="ms-0 ms-sm-10 mt-5 mt-sm-0  ">
                                    <span class="badge bg-light-success mb-2">Active</span>
                                    <h2>Michael Franklin</h2>
                                    <a href="mailto:michaelfrankin@gmail.com"
                                       class="text-gray-600 text-decoration-none fs-5">
                                        michaelfrankin@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-12">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6 col-12 mb-6 mb-md-0">
                                    <div class="border rounded-10 p-5 h-100">
                                        <h2 class="text-primary mb-3">20</h2>
                                        <h3 class="fs-5 fw-light text-gray-600 mb-0">Total Cases</h3>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-6 mb-md-0">
                                    <div class="border rounded-10 p-5 h-100">
                                        <h2 class="text-primary mb-3">25</h2>
                                        <h3 class="fs-5 fw-light text-gray-600 mb-0">Patients</h3>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="border rounded-10 p-5 h-100">
                                        <h2 class="text-primary mb-3">12</h2>
                                        <h3 class="fs-5 fw-light text-gray-600 mb-0">Total Appointments</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-7 overflow-hidden">
                <ul class="nav nav-tabs mb-5 pb-1 overflow-auto flex-nowrap text-nowrap" id="myTab" role="tablist">
                    <li class="nav-item position-relative me-7 mb-3" role="presentation">
                        <button class="nav-link active p-0" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                                type="button" role="tab" aria-controls="overview" aria-selected="true">
                            Overview
                        </button>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3" role="presentation">
                        <button class="nav-link p-0" id="cases-tab" data-bs-toggle="tab" data-bs-target="#cases"
                                type="button" role="tab" aria-controls="cases" aria-selected="false">
                            Cases
                        </button>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3" role="presentation">
                        <button class="nav-link p-0" id="patients-tab" data-bs-toggle="tab" data-bs-target="#patients"
                                type="button" role="tab" aria-controls="patients" aria-selected="false">
                            Patients
                        </button>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3" role="presentation">
                        <button class="nav-link p-0" id="appointments-tab" data-bs-toggle="tab" data-bs-target="#appointments"
                                type="button" role="tab" aria-controls="appointments" aria-selected="false">
                            Appointments
                        </button>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3" role="presentation">
                        <button class="nav-link p-0" id="schedules-tab" data-bs-toggle="tab" data-bs-target="#schedules"
                                type="button" role="tab" aria-controls="schedules" aria-selected="false">
                            Schedules
                        </button>
                    </li>
                    <li class="nav-item position-relative me-7 mb-3" role="presentation">
                        <button class="nav-link p-0" id="payrolls-tab" data-bs-toggle="tab" data-bs-target="#payrolls"
                                type="button" role="tab" aria-controls="payrolls" aria-selected="false">
                            My Payrolls
                        </button>
                    </li>
                </ul>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="row">
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Designation:</label>
                                        <span class="fs-5 text-gray-800">Doctor</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Phone:</label>
                                        <span class="fs-5 text-gray-800">+919874563210</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Doctor Department:</label>
                                        <span class="fs-5 text-gray-800">Chest Physician</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Qualification:</label>
                                        <span class="fs-5 text-gray-800">MD</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Blood Group:</label>
                                        <span class="fs-5 text-success">O+</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Date Of Birth:</label>
                                        <span class="fs-5 text-gray-800">1st Feb, 1994</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Specialist:</label>
                                        <span class="fs-5 text-gray-800">Bones</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Gender:</label>
                                        <span class="fs-5 text-gray-800">Male</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column mb-sm-0 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Created On:</label>
                                        <span class="fs-5 text-gray-800">2 months ago</span>
                                    </div>
                                    <div class="col-sm-6 d-flex flex-column">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Last Updated:</label>
                                        <span class="fs-5 text-gray-800">1 day ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cases" role="tabpanel" aria-labelledby="cases-tab">
                                Cases
                            </div>
                            <div class="tab-pane fade" id="patients" role="tabpanel" aria-labelledby="patients-tab">
                                Patients
                            </div>
                            <div class="tab-pane fade" id="appointments" role="tabpanel" aria-labelledby="appointments-tab">
                                Appointments
                            </div>
                            <div class="tab-pane fade" id="schedules" role="tabpanel" aria-labelledby="schedules-tab">
                                Schedules
                            </div>
                            <div class="tab-pane fade" id="payrolls" role="tabpanel" aria-labelledby="payrolls-tab">
                                My Payrolls
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
