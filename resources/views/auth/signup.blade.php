@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="https://hms-staging.infyom.com" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{asset('images/logo.png')}}" class="img-fluid">
            </a>
        </div>
        <div class="bg-theme-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7">Sign Up</h1>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputFirstName" class="form-label">
                            First Name:<span class="required"></span>
                        </label>
                        <input type="text" class="form-control" id="formInputFirstName" aria-describedby="firstName">
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputLastName" class="form-label">
                            Last Name:<span class="required"></span>
                        </label>
                        <input type="text" class="form-control" id="formInputLastName" aria-describedby="lastName">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputEmail" class="form-label">
                            Email:<span class="required"></span>
                        </label>
                        <input type="email" class="form-control" id="formInputEmail" aria-describedby="email">
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputPhoneNumber" class="form-label">
                            Phone Number:<span class="required"></span>
                        </label>
                        <input type="text" class="form-control" id="formInputPhoneNumber" aria-describedby="phoneNumber">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputPassword" class="form-label">
                            Password:<span class="required"></span>
                        </label>
                        <input type="password" class="form-control" id="formInputPassword" aria-describedby="password">
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputConfirmPassword" class="form-label">
                            Confirm Password:<span class="required"></span>
                        </label>
                        <input type="password" class="form-control" id="formInputConfirmPassword" aria-describedby="confirmPassword">
                    </div>
                </div>
                <div class="mb-sm-10 mb-6">
                    <label for="formInputConfirmPassword" class="form-label">
                        Gender:<span class="required"></span>
                    </label>
                    <div class="d-flex align-items-center">
                        <div class="form-check me-6">
                            <input type="radio" class="form-check-input" id="formMale" checked>
                            <label class="form-check-label" for="formMale">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="formFemale">
                            <label class="form-check-label" for="formFemale">Female</label>
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <span class="text-gray-700 me-2">Already User?</span>
                    <a href="https://hms-staging.infyom.com/password/reset" class="link-info fs-6 text-decoration-none">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
