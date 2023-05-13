@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Invoice Details</h1>
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
                        <div class="col-xxl-8">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="d-flex align-items-center mb-md-10 mb-5">
                                        <div class="image image-circle image-small">
                                            <img src="{{asset('images/avatar.png')}}" alt="user">
                                        </div>
                                        <h3 class="ps-7">Invoice #FGOKM9</h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-6">
                                    <div class="d-flex flex-column mb-md-10 mb-5 mt-3 mt-md-0">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Invoice Date:</label>
                                        <span class="fs-5 text-gray-800">06/06/2022</span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6 text-end">
                                    <button type="button" class="btn btn-success">Print</button>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Issue For:</label>
                                        <span class="fs-5 text-gray-800 mb-3">Mahendra Beladiya</span>
                                        <p class="text-gray-700 fs-5 mb-0">
                                            141, malborn street, Panvel villa New york, USA
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-md-6">
                                    <div class="d-flex flex-column mb-md-10 mb-5">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Issue For:</label>
                                        <span class="fs-5 text-gray-800 mb-3">Mahendra Beladiya</span>
                                        <p class="text-gray-700 fs-5 mb-0">
                                            141, malborn street, Panvel villa New york, USA</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <table class="table table-striped box-shadow-none mt-4">
                                        <thead>
                                        <tr>
                                            <th scope="col">Account</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="py-4">Hedy Shepherd</td>
                                            <td class="py-4">Ad hic quia mollitia</td>
                                            <td class="py-4">797</td>
                                            <td class="py-4">232</td>
                                            <td class="py-4">$184,904</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-5 ms-lg-auto mt-4">
                                    <div class="border-top">
                                        <table class="table table-borderless mb-0 mt-5">
                                            <tbody>
                                            <tr>
                                                <td class="ps-0">Sub Total:</td>
                                                <td class="text-gray-900 text-end pe-0">$ 184,904.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">Discount:</td>
                                                <td class="text-gray-900 text-end pe-0">$ 0.00</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">Total Amount:</td>
                                                <td class="text-gray-900 text-end pe-0">$ 184,904.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="bg-gray-100 rounded-15 p-md-7 p-5 h-100 mt-xxl-0 mt-5 col-xxl-9 ms-xxl-auto">
                                <span class="badge bg-light-success mb-6">Paid</span>
                                <h3 class="mb-5">Patient  Overview</h3>
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-4 col-sm-6 d-flex flex-column mb-xxl-7 mb-lg-0 mb-4">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Patient Name:</label>
                                        <a href="#" class="link-primary fs-5 text-decoration-none">Mahendra Beladiya</a>
                                    </div>
                                    <div class="col-xxl-12 col-lg-4 col-sm-6 d-flex flex-column mb-xxl-7 mb-lg-0 mb-4">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Patient Email:</label>
                                        <span class="fs-5 text-gray-900">mbeladiya@gmail.com</span>
                                    </div>
                                    <div class="col-xxl-12 col-lg-4 col-sm-6 d-flex flex-column mb-xxl-7">
                                        <label for="name" class="pb-2 fs-5 text-gray-600">Patient Gender:</label>
                                        <span class="fs-5 text-gray-900">Male</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
