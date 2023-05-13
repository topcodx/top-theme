@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Bed Status</h1>
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
                    <div class="d-sm-flex align-items-sm-center mb-lg-10 mb-7">
                        <div class="d-flex align-items-center me-sm-7 mb-sm-0 mb-4">
                            <i class="fas fa-procedures fs-1 text-danger"></i>
                            <label class="text-gray-600 fs-4 ms-5">Assigned Beds</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bed fs-1 text-success"></i>
                            <label class="text-gray-600 fs-4 ms-5">Assigned Beds</label>
                        </div>
                    </div>
                    <div class="mb-lg-10 mb-5">
                        <h2 class="fs-4 text-gray-600 mb-4">ICU</h2>
                        <div class="border px-lg-10 px-4 py-lg-6 py-2">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <div class="dropdown dropdown-hover">
                                        <a href="#" class="text-danger text-decoration-none">
                                            <i class="fas fa-procedures fa-3x"></i>
                                            <label class="d-block cursor-pointer mt-2">Nasim Palmer</label>
                                        </a>
                                        <div class="dropdown-menu border rounded-10 px-5 py-3 d-block">
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Bed Name :</label>
                                                <span class="fs-6 text-gray-600">06/06/2022</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Patient :</label>
                                                <span class="fs-6 text-gray-600">Charles Bender</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Phone:</label>
                                                <span class="fs-6 text-gray-600">+919910229811</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Admission Date :</label>
                                                <span class="fs-6 text-gray-600">15th Jun, 2022 02:16:00 PM</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Gender :</label>
                                                <span class="fs-6 text-gray-600">Female</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">SRS Bed</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Single Layer Bed</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">EME</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <div class="dropdown dropdown-hover">
                                        <a href="#" class="text-danger text-decoration-none"
                                           aria-expanded="false">
                                            <i class="fas fa-procedures fa-3x"></i>
                                            <label class="d-block cursor-pointer mt-2">Bruce Banner</label>
                                        </a>
                                        <div class="dropdown-menu border rounded-10 px-5 py-3 d-block">
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Bed Name :</label>
                                                <span class="fs-6 text-gray-600">06/06/2022</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Patient :</label>
                                                <span class="fs-6 text-gray-600">Charles Bender</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Phone:</label>
                                                <span class="fs-6 text-gray-600">+919910229811</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Admission Date :</label>
                                                <span class="fs-6 text-gray-600">15th Jun, 2022 02:16:00 PM</span>
                                            </div>
                                            <div class="py-1">
                                                <label class="fs-6 text-gray-800">Gender :</label>
                                                <span class="fs-6 text-gray-600">Female</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-danger text-decoration-none">
                                        <i class="fas fa-procedures fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Charies Bender</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Nasim Palmer</label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-lg-10 mb-5">
                        <h2 class="fs-4 text-gray-600 mb-4">NICU</h2>
                        <div class="border px-lg-10 px-4 py-lg-6 py-2">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-danger text-decoration-none">
                                        <i class="fas fa-procedures fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Evans Chris</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-danger text-decoration-none">
                                        <i class="fas fa-procedures fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Leslie</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-danger text-decoration-none">
                                        <i class="fas fa-procedures fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Pratibha Parkar</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">M10</label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="fs-4 text-gray-600 mb-4">VIP Ward</h2>
                        <div class="border px-lg-10 px-4 py-lg-6 py-2">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-danger text-decoration-none">
                                        <i class="fas fa-procedures fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Brock Rose</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Delux</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Delux</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Super Deluxe</label>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 text-center py-4">
                                    <a href="#" class="text-success text-decoration-none">
                                        <i class="fas fa-bed fa-3x"></i>
                                        <label class="d-block cursor-pointer mt-2">Test2</label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
