@extends('layouts.app')
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">Add Invoice</h1>
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
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                                <h4>Invoice # <span class="text-gray-500">FGOKM9</span></h4>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-sm-0 mb-6">
                                            <label for="exampleInputSelect2" class="form-label">
                                                Patient:<span class="required"></span>
                                            </label>
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
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="mb-sm-0 mb-2">
                                            <label for="exampleInputDatePicker" class="form-label">DatePicker</label>
                                            <input type="text" class="form-control date datepicker"
                                                   placeholder="2022/06/10" data-date-format="yyyy/mm/dd"
                                                   data-provide="datepicker" id="exampleInputDatePicker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="line my-lg-10 my-6">
                            <div class="col-sm-6 col-12">
                                <div class="mb-lg-10 mb-6">
                                    <label for="InputDiscount" class="form-label">
                                        Discount:<span class="required"></span>(%)
                                    </label>
                                    <input type="text" class="form-control" id="InputDiscount" aria-describedby="Discount"
                                           value="">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-lg-10 mb-6">
                                    <label for="exampleInputSelect2" class="form-label">
                                        Status:<span class="required"></span>
                                    </label>
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
                            </div>
                            <div class="col-12 text-end mb-lg-10 mb-6">
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>
                            <div class="col-12">
                                <table class="table table-striped mt-4">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ACCOUNT</th>
                                        <th scope="col">DESCRIPTION</th>
                                        <th scope="col">QTY<span class="required"></span></th>
                                        <th scope="col">PRICE<span class="required"></span></th>
                                        <th scope="col">AMOUNT<span class="required"></span></th>
                                        <th scope="col" class="text-end">ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-4">1</td>
                                        <td class="py-4">
                                            <select class="form-select io-select2" id="exampleInputSelect2"
                                                                         aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="IN">India</option>
                                                <option value="CH">China</option>
                                                <option value="NZ">NewZealand</option>
                                                <option value="US">United States</option>
                                                <option value="CA">Canada</option>
                                            </select>
                                        </td>
                                        <td class="py-4">
                                            <input type="text" class="form-control" id="InputDescription" aria-describedby="description"
                                                                       value="">
                                        </td>
                                        <td class="py-4">
                                            <input type="text" class="form-control" id="InputQty" aria-describedby="qty"
                                                                        value="">
                                        </td>
                                        <td class="py-4">
                                            <input type="text" class="form-control" id="InputPrice" aria-describedby="price"
                                                   value="">
                                        </td>
                                        <td class="py-4">
                                            <input type="text" class="form-control" id="InputAmount" aria-describedby="amount"
                                                   value="">
                                        </td>
                                        <td class="py-4 text-end">
                                            <button type="button" title="Delete" class="btn px-2 text-danger fs-3" id="deleteUser">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xxl-3 col-lg-5 col-md-6 ms-md-auto mt-4 mb-lg-10 mb-6">
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
                            <div class="col-12 text-end">
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
