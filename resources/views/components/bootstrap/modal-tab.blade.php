@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div>
                <h1 class="mb-5">Modal</h1>
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">New Account</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="mb-5">
                                                <label for="exampleInputEmail1" class="form-label">
                                                    Account:
                                                    <span class="required"></span>
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputAccount"
                                                       aria-describedby="account" value="">
                                            </div>
                                            <div class="mb-5">
                                                <label for="exampleInputEmail1" class="form-label">
                                                    Description:
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputDescription"
                                                       aria-describedby="description" value="">
                                            </div>
                                            <div class="mb-5 d-flex align-items-center">
                                                <label for="exampleInputStatus" class="form-label me-5 mb-0 mb-1">
                                                    Status:
                                                </label>
                                                <div class="form-check form-switch mb-0">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckChecked" checked>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label for="exampleInputType" class="form-label me-5 mb-1">
                                                    Type:
                                                </label>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check me-10 mb-0">
                                                        <input type="radio" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label"
                                                               for="exampleCheck1">Debit</label>
                                                    </div>
                                                    <div class="form-check mb-0">
                                                        <input type="radio" class="form-check-input" id="exampleCheck2">
                                                        <label class="form-check-label"
                                                               for="exampleCheck2">Credit</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer pt-0">
                                            <button type="button" class="btn btn-primary m-0">Save</button>
                                            <button type="button" class="btn btn-secondary my-0 ms-5 me-0"
                                                    data-bs-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <h1 class="mb-5 mt-5">Tabs</h1>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Profile
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Contact
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <p class="p-4 border border-primary rounded mt-5 text-gray-600 mb-0">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                <p class="p-4 border border-primary rounded mt-5 text-gray-600 mb-0">
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                    an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                <p class="p-4 border border-primary rounded mt-5 text-gray-600 mb-0">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
