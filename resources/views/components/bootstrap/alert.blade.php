@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h2 class="mb-5 fs-1">Alerts</h2>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info fs-4 text-white d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-face-smile me-4"></i>
                    HI! I’m a blue alert with informations
                </div>
                <div class="alert alert-success fs-4 text-white d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-face-smile me-4"></i>
                    HI! I’m a Success alert with green
                </div>
                <div class="alert alert-danger fs-4 text-white d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-face-frown me-4"></i>
                    HI! I’m a error alert with red
                </div>
                <div class="alert alert-warning fs-4 text-white d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-face-meh me-4"></i>
                    HI! I’m a warning alert with yellow
                </div>
            </div>
        </div>
    </div>
@endsection
