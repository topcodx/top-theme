@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h2 class="mb-5 fs-1">Badges</h2>
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <span class="badge bg-primary me-2">Primary</span>
                    <span class="badge bg-secondary me-2">Secondary</span>
                    <span class="badge bg-success me-2">Success</span>
                    <span class="badge bg-danger me-2">Danger</span>
                    <span class="badge bg-warning me-2">Warning</span>
                    <span class="badge bg-info me-2">Info</span>
                    <span class="badge bg-light text-dark me-2">Light</span>
                    <span class="badge bg-dark">Dark</span>
                </div>
            </div>
        </div>
        <h2 class="mb-5 fs-1 mt-10">Circle Badges Dark</h2>
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <span class="badge badge-circle bg-primary me-2">15</span>
                    <span class="badge badge-circle bg-success me-2">15</span>
                    <span class="badge badge-circle bg-danger me-2">15</span>
                    <span class="badge badge-circle bg-warning me-2">15</span>
                    <span class="badge badge-circle bg-info">15</span>
                </div>
            </div>
        </div>
        <h2 class="mb-5 fs-1 mt-10">Light Badges</h2>
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <span class="badge bg-light-primary me-2">Primary</span>
                    <span class="badge bg-light-success me-2">Success</span>
                    <span class="badge bg-light-danger me-2">Danger</span>
                    <span class="badge bg-light-warning me-2">Warning</span>
                    <span class="badge bg-light-info">Info</span>
                </div>
            </div>
        </div>
        <h2 class="mb-5 fs-1 mt-10">Circle Badges Light</h2>
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <span class="badge badge-circle bg-light-primary me-2">15</span>
                    <span class="badge badge-circle bg-light-success me-2">15</span>
                    <span class="badge badge-circle bg-light-danger me-2">15</span>
                    <span class="badge badge-circle bg-light-warning me-2">15</span>
                    <span class="badge badge-circle bg-light-info">15</span>
                </div>
            </div>
        </div>
    </div>
@endsection
