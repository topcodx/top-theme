@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Prescription</h1>
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
                        <div class="col-md-4 col-sm-6 co-12">
                            <div class="image mb-7">
                                <img src="{{asset('images/docpoint.png')}}" alt="user" class="img-fluid max-width-180">
                            </div>
                            <h3>Dr. Steven N Carter</h3>
                            <h4 class="fs-5 text-gray-600 fw-light mb-0">MBBS, FCPS, FRCS</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 co-12 mt-sm-0 mt-5">
                            <div class="d-flex flex-row">
                                <label for="name" class="pb-2 fs-5 text-gray-600 me-1">Patient Name:</label>
                                <span class="fs-5 text-gray-800">John Deo</span>
                            </div>
                            <div class="d-flex flex-row">
                                <label for="name" class="pb-2 fs-5 text-gray-600 me-1">Date:</label>
                                <span class="fs-5 text-gray-800">05/09/2022</span>
                            </div>
                            <div class="d-flex flex-row">
                                <label for="name" class="pb-2 fs-5 text-gray-600 me-1">Age:</label>
                                <span class="fs-5 text-gray-800">22 Years</span>
                            </div>
                        </div>
                        <div class="col-md-4 co-12 mt-md-0 mt-5">
                            <p class="text-gray-600 mb-3">Diagnosis Center, Southern California</p>
                            <p class="text-gray-600 mb-3">4339 State University Dr, Los Angeles,
                                CA 90032, United States</p>
                            <p class="text-gray-600 mb-3">123-4587-6965  /  541-8547-9856</p>
                            <p class="text-gray-600 mb-3">contactus@gmail.com  /  contact.me@gmail.com</p>
                        </div>
                        <div class="col-12 px-0">
                            <hr class="line my-lg-10 mb-6 mt-4">
                        </div>
                        <div class="col-md-4 col-sm-6 co-12">
                            <h6>Problem:</h6>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply dummy</p>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply dummy text</p>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply</p>
                        </div>
                        <div class="col-md-4 col-sm-6 co-12 mt-sm-0 mt-5">
                            <h6>Test:</h6>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply dummy</p>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply dummy text</p>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply</p>
                        </div>
                        <div class="col-md-4 col-sm-6 co-12 mt-md-0 mt-5">
                            <h6>Advice:</h6>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply dummy</p>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply dummy text</p>
                            <p class="text-gray-600 mb-2 fs-4">Lorem Ipsum is simply</p>
                        </div>
                        <div class="col-12 mt-6">
                            <h6>Rx:</h6>
                            <div class="table-responsive">
                                <table class="table box-shadow-none">
                                    <thead>
                                    <tr>
                                        <th scope="col">MEDICINE NAME</th>
                                        <th scope="col">DOSAGE</th>
                                        <th scope="col">DURATION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-4 border-bottom-0">Humira</td>
                                        <td class="py-4 border-bottom-0">0 - 1 - 0 (After Meal)</td>
                                        <td class="py-4 border-bottom-0">7 Day</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 border-bottom-0">Nexium</td>
                                        <td class="py-4 border-bottom-0">1 - 1 - 1 (After Meal)</td>
                                        <td class="py-4 border-bottom-0">7 Day</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 border-bottom-0">Synthroid</td>
                                        <td class="py-4 border-bottom-0">1 - 1 - 1 (Before Meal)</td>
                                        <td class="py-4 border-bottom-0">7 Day</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mt-5">
                                <h4 class="mb-0 me-3 mt-3">Next Visit : 7 Days Later</h4>
                                <div class="mt-3">
                                    <h4>Dr. Steven N Carter</h4>
                                    <h6 class="text-gray-600 fw-light mb-0">MBBS, FCPS, FRCS</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
