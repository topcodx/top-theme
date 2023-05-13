@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Form</h1>
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
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Email address:<span class="required"></span>
                            </label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   value="">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" value="">
                        </div>
                        <div class="mb-3 position-relative">
                            <input type="text" class="form-control pe-10" aria-label="Password" data-toggle="password">
                            <span
                                class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                                <i class="bi bi-eye-slash-fill"></i>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="exampleInputPhone" value="">
                            <span class="text-success d-block fw-400 fs-small mt-2">Valid Number</span>
                            <span class="text-danger d-block fw-400 fs-small mt-2">Invalid Number</span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Email address:
                                <span class="required"></span>
                                <button type="button" class="btn btn-secondary badge badge-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Tooltip on bottom">
                                    ?
                                </button>
                            </label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   value="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Email address:
                                <span class="required"></span>
                                <button type="button" class="btn text-gray-600 fs-small p-0" data-bs-toggle="tooltip"
                                        data-bs-placement="right"
                                        title="This is Tool Tips">
                                    (This is Tool Tips)
                                </button>
                            </label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   value="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFlatpickr" class="form-label">Flatpickr</label>
                            <input type="text" id="basicDate" placeholder="Please select Date Time" data-input
                                   class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDatePicker" class="form-label">DatePicker</label>
                            <input type="text" class="form-control date datepicker" placeholder="2022/06/10"
                                   data-date-format="yyyy/mm/dd" data-provide="datepicker">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDateRangePicker" class="form-label">DateRangePicker</label>
                            <input type="text" placeholder="Please select Date Time" data-input
                                   class="form-control daterange">
                        </div>
                        <div class="mb-3" io-image-input="true">
                            <label for="exampleInputImage" class="form-label">Profile:</label>
                            <div class="d-block">
                                <div class="image-picker">
                                    <div class="image previewImage" id="exampleInputImage"
                                         style="background-image: url({{asset('images/avatar.png')}})"></div>
                                    <span class="picker-edit rounded-circle text-gray-500 fs-small" title="edit">
                                    <label>
                                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                        <input type="file" id="profile_image" name="profile_image"
                                               class="image-upload d-none" accept="image/*"/>
                                    </label>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputSelect" class="form-label">Select</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputSelect2" class="form-label">Select2</label>
                            <select class="form-select io-select2" id="exampleInputSelect2"
                                    aria-label="Default select example">
                                <option selected>Select Country</option>
                                <option value="IN">India</option>
                                <option value="CH">China</option>
                                <option value="NZ">NewZealand</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                        </div>
                        <div class="float-end">
                            <button type="submit" class="btn btn-primary me-5">Save</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
