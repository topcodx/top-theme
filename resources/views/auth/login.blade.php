@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="https://hms-staging.infyom.com" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{asset('images/logo.png')}}" class="img-fluid">
            </a>
        </div>
        <div class="bg-theme-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7">Sign In</h1>
            <form>
                <div class="mb-sm-7 mb-4">
                    <label for="formInputEmail" class="form-label">
                        Email Address:<span class="required"></span>
                    </label>
                    <input type="email" class="form-control" id="formInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="formInputPassword" class="form-label">Password:<span class="required"></span></label>
                        <a href="https://hms-staging.infyom.com/password/reset" class="link-info fs-6 text-decoration-none">
                            Forgot Password ?
                        </a>
                    </div>
                    <input type="password" class="form-control" id="formInputPassword">
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck" checked>
                    <label class="form-check-label" for="formCheck">Remember Password</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>
                <div class="d-flex align-items-center mb-10 mt-4">
                    <span class="text-gray-700 me-2"> Don’t have an account?</span>
                    <a href="https://hms-staging.infyom.com/password/reset" class="link-info fs-6 text-decoration-none">
                        Sign up
                    </a>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-danger d-flex align-items-center justify-content-center mb-sm-5 mb-4">
                        <i class="fa-brands fa-google fs-2 me-3"></i>Log In via Google
                    </button>
                    <button type="submit" class="btn btn-info d-flex align-items-center justify-content-center">
                        <i class="fa-brands fa-facebook-f fs-2 me-3"></i>Log In via Facebook
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
