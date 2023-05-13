@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="mb-5">Buttons</h1>
        <div class="d-flex flex-column">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Normal Buttons</h3>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="card-body pt-0">
                    <button type="button" class="btn btn-primary me-5">Primary</button>
                    <button type="button" class="btn btn-secondary me-5">Secondary</button>
                    <button type="button" class="btn btn-success me-5">Success</button>
                    <button type="button" class="btn btn-danger me-5">Danger</button>
                    <button type="button" class="btn btn-warning me-5">Warning</button>
                    <button type="button" class="btn btn-info me-5">Info</button>
                    <button type="button" class="btn btn-light me-5">Light</button>
                    <button type="button" class="btn btn-dark me-5">Dark</button>
                    <button type="button" class="btn btn-link me-5">Link</button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Outline Buttons</h3>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="card-body pt-0">
                    <button type="button" class="btn btn-outline-primary me-5">Primary</button>
                    <button type="button" class="btn btn-outline-secondary me-5">Secondary</button>
                    <button type="button" class="btn btn-outline-success me-5">Success</button>
                    <button type="button" class="btn btn-outline-danger me-5">Danger</button>
                    <button type="button" class="btn btn-outline-warning me-5">Warning</button>
                    <button type="button" class="btn btn-outline-info me-5">Info</button>
                    <button type="button" class="btn btn-outline-light me-5">Light</button>
                    <button type="button" class="btn btn-outline-dark me-5">Dark</button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Small Buttons</h3>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="card-body pt-0">
                    <button type="button" class="btn btn-primary btn-sm me-5">Primary</button>
                    <button type="button" class="btn btn-secondary btn-sm me-5">Secondary</button>
                    <button type="button" class="btn btn-success btn-sm me-5">Success</button>
                    <button type="button" class="btn btn-danger btn-sm me-5">Danger</button>
                    <button type="button" class="btn btn-warning btn-sm me-5">Warning</button>
                    <button type="button" class="btn btn-info btn-sm me-5">Info</button>
                    <button type="button" class="btn btn-light btn-sm me-5">Light</button>
                    <button type="button" class="btn btn-dark btn-sm me-5">Dark</button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header p-5">
                    <h3 class="card-title">Icon Buttons</h3>
                    <i class="fa-solid fa-xmark fs-1"></i>
                </div>
                <div class="card-body pt-0">
                    <button type="button" class="btn btn-icon btn-outline-primary me-5">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-secondary me-5">
                        <i class="fa-solid fa-file-excel"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-success me-5">
                        <i class="fa-solid fa-download"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-danger me-5">
                        <i class="fa-solid fa-skull-crossbones"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-warning me-5">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-info me-5">
                        <i class="fa-brands fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-light me-5">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-outline-dark me-5">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
