@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Schedules</h1>
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
                <div class="card-body px-0">
                    <form>
                        <div class="row">
                            <div class="col-12 px-12">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="mb-sm-4 mb-6">
                                            <label for="inputDoctor" class="form-label">
                                                Doctor:<span class="required"></span>
                                            </label>
                                            <select class="form-select io-select2" id="inputDoctor"
                                                    aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="IN">India</option>
                                                <option value="CH">China</option>
                                                <option value="NZ">NewZealand</option>
                                                <option value="US">United States</option>
                                                <option value="CA">Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="mb-sm-4 mb-6">
                                            <label for="inputScheduleGap" class="form-label">
                                                Schedule Gap:<span class="required"></span>
                                            </label>
                                            <select class="form-select io-select2" id="inputScheduleGap"
                                                    aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="IN">India</option>
                                                <option value="CH">China</option>
                                                <option value="NZ">NewZealand</option>
                                                <option value="US">United States</option>
                                                <option value="CA">Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="mb-sm-4 mb-6">
                                            <label for="inputInvoiceDate" class="form-label">
                                                Invoice Date:<span class="required"></span>
                                            </label>
                                            <select class="form-select io-select2" id="inputInvoiceDate"
                                                    aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="IN">India</option>
                                                <option value="CH">China</option>
                                                <option value="NZ">NewZealand</option>
                                                <option value="US">United States</option>
                                                <option value="CA">Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <table class="table table-striped mt-lg-4">
                                    <tbody>
                                    <tr>
                                        <td style="width: 4%;" class="py-1">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" checked>
                                            </div>
                                        </td>
                                        <td style="width: 5%;" class="py-1">
                                            Monday
                                        </td>
                                        <td style="width: 25%;" class="py-1">
                                            <div class="d-flex align-items-center my-4">
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>12:30 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                                <span class="px-3">To</span>
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>05:15 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center my-4">
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>12:30 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                                <span class="px-3">To</span>
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>05:15 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="py-1">
                                            <button type="button" title="Delete" class="btn px-2 text-danger fs-3"
                                                    id="deleteUser">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                        <td class="text-end py-1">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button type="button" title="plus" class="btn px-2 text-gray-600 fs-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="dropdown d-flex align-items-center py-4">
                                                    <button class="btn dropdown-toggle ps-2 pe-0 hide-arrow"
                                                            type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-auto-close="outside">
                                                        <i class="fa-solid fa-copy text-gray-600 fs-2"></i>
                                                    </button>
                                                    <div class="dropdown-menu py-0 rounded-10 min-width-220"
                                                         aria-labelledby="dropdownMenuButton1">
                                                        <div class="p-5">
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck1">Tuesday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck1">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck2">Wednesday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck2">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck3">Thursday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck3">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck4">Friday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck4">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck5">Saturday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck5">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck6">Sunday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck6">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary w-100">Copy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 4%;" class="py-1">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" checked>
                                            </div>
                                        </td>
                                        <td class="py-1">
                                            Monday
                                        </td>
                                        <td class="py-1">
                                            <div class="d-flex align-items-center my-4">
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>12:30 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                                <span class="px-3">To</span>
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>05:15 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="py-1">
                                            <button type="button" title="Delete" class="btn px-2 text-danger fs-3"
                                                    id="deleteUser">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                        <td class="text-end py-1">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button type="button" title="plus" class="btn px-2 text-gray-600 fs-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="dropdown d-flex align-items-center py-4">
                                                    <button class="btn dropdown-toggle ps-2 pe-0 hide-arrow"
                                                            type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-auto-close="outside">
                                                        <i class="fa-solid fa-copy text-gray-600 fs-2"></i>
                                                    </button>
                                                    <div class="dropdown-menu py-0 rounded-10 min-width-220"
                                                         aria-labelledby="dropdownMenuButton1">
                                                        <div class="p-5">
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck1">Tuesday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck1">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck2">Wednesday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck2">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck3">Thursday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck3">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck4">Friday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck4">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck5">Saturday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck5">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck6">Sunday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck6">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary w-100">Copy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 4%;" class="py-1">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" checked>
                                            </div>
                                        </td>
                                        <td class="py-1">
                                            Monday
                                        </td>
                                        <td class="py-1">
                                            <div class="d-flex align-items-center my-4">
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>12:30 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                                <span class="px-3">To</span>
                                                <select class="form-select io-select2"
                                                        aria-label="Default select example">
                                                    <option selected>05:15 AM</option>
                                                    <option value="IN">India</option>
                                                    <option value="CH">China</option>
                                                    <option value="NZ">NewZealand</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="py-1">
                                            <button type="button" title="Delete" class="btn px-2 text-danger fs-3"
                                                    id="deleteUser">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                        <td class="text-end py-1">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button type="button" title="plus" class="btn px-2 text-gray-600 fs-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="dropdown d-flex align-items-center py-4">
                                                    <button class="btn dropdown-toggle ps-2 pe-0 hide-arrow"
                                                            type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-bs-auto-close="outside">
                                                        <i class="fa-solid fa-copy text-gray-600 fs-2"></i>
                                                    </button>
                                                    <div class="dropdown-menu py-0 rounded-10 min-width-220"
                                                         aria-labelledby="dropdownMenuButton1">
                                                        <div class="p-5">
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck1">Tuesday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck1">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck2">Wednesday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck2">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck3">Thursday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck3">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck4">Friday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck4">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck5">Saturday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck5">
                                                            </div>
                                                            <div
                                                                class="mb-5 form-check ps-0 d-flex align-items-center justify-content-between">
                                                                <label class="form-check-label text-gray-900"
                                                                       for="exampleCheck6">Sunday</label>
                                                                <input type="checkbox"
                                                                       class="form-check-input float-none ms-0"
                                                                       id="exampleCheck6">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary w-100">Copy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 text-end px-12">
                                <button type="submit" class="btn btn-primary me-lg-4 me-3">Save</button>
                                <button type="button" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
