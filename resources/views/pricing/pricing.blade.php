@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center mb-19">Pricing Plan</h1>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                <div class="card pricing-card text-center flex-fill">
                    <div class="card-body px-xl-10 px-7 py-xl-14 py-10 d-flex flex-column">
                        <i class="fa-solid fa-cube text-danger fa-3x mb-5"></i>
                        <h3 class="text-gray-900 fs-2">Enterprise</h3>
                        <div class="d-flex justify-content-center mt-5">
                            <h4 class="text-center mb-6 mt-2">
                                $<span class="fa-3x fw-bolder">149</span>
                                <span class="h6 text-gray-800 ml-2">/ month</span>
                            </h4>
                        </div>
                        <ul class="pricing-plan-features text-gray-600 fs-4 mb-9">
                            <li><i class="fa-solid fa-check me-3"></i>Unlimited conferences</li>
                            <li><i class="fa-solid fa-check me-3"></i>100 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>Custom Hold Music</li>
                            <li><i class="fa-solid fa-check me-3"></i>10 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>100 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>Custom Hold Music</li>
                            <li><i class="fa-solid fa-check me-3"></i>10 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>100 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>Custom Hold Music</li>
                            <li><i class="fa-solid fa-check me-3"></i>10 participants max</li>
                        </ul>
                        <a href="#!" class="btn btn-danger pricing-plan-btn mt-auto align-self-center">Free</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                <div class="card pricing-card text-center flex-fill">
                    <div class="card-body px-xl-10 px-7 py-xl-14 py-10 d-flex flex-column">
                        <i class="fa-solid fa-trophy text-success fa-3x mb-5"></i>
                        <h3 class="text-gray-900 fs-2">Chase Sweeney</h3>
                        <div class="d-flex justify-content-center mt-5">
                            <h4 class="text-center mb-6 mt-2">
                                $<span class="fa-3x fw-bolder">489</span>
                                <span class="h6 text-gray-800 ml-2">/ month</span>
                            </h4>
                        </div>
                        <ul class="pricing-plan-features text-gray-600 fs-4 mb-9">
                            <li><i class="fa-solid fa-check me-3"></i>Unlimited conferences</li>
                            <li><i class="fa-solid fa-check me-3"></i>100 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>Custom Hold Music</li>
                            <li><i class="fa-solid fa-check me-3"></i>10 participants max</li>
                        </ul>
                        <a href="#!"
                           class="btn btn-success text-white pricing-plan-btn mt-auto align-self-center">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                <div class="card pricing-card text-center flex-fill">
                    <div class="card-body px-xl-10 px-7 py-xl-14 py-10 d-flex flex-column">
                        <i class="fa-solid fa-gift text-primary fa-3x mb-5"></i>
                        <h3 class="text-gray-900 fs-2">Demo Vip Plan</h3>
                        <div class="d-flex justify-content-center mt-5">
                            <h4 class="text-center mb-6 mt-2">
                                $<span class="fa-3x fw-bolder">400</span>
                                <span class="h6 text-gray-800 ml-2">/ month</span>
                            </h4>
                        </div>
                        <ul class="pricing-plan-features text-gray-600 fs-4 mb-9">
                            <li><i class="fa-solid fa-check me-3"></i>Unlimited conferences</li>
                            <li><i class="fa-solid fa-check me-3"></i>100 participants max</li>
                            <li><i class="fa-solid fa-check me-3"></i>Custom Hold Music</li>
                            <li><i class="fa-solid fa-check me-3"></i>10 participants max</li>
                        </ul>
                        <a href="#!" class="btn btn-primary pricing-plan-btn mt-auto align-self-center">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
