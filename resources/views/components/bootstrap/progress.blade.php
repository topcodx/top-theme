@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="mb-5">Progress</h1>
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
