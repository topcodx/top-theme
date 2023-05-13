@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-5">Toastr</h1>
        {{--        <div id="toast-container" class="toast-top-right">--}}
        {{--            <div class="toast toast-success" aria-live="polite" style="display: block;">--}}
        {{--                <div class="toast-progress" style="width: 80.46%;"></div>--}}
        {{--                <button type="button" class="toast-close-button" role="button">×</button>--}}
        {{--                <div class="toast-title">Successful</div>--}}
        {{--                <div class="toast-message">Your OS has been updated to the latest version</div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="d-flex flex-column">
            <div class="card">
                <div class="card-body p-8">
                    <button type="button" class="btn btn-success me-5" onclick="openToast('success')">Success Toast
                    </button>
                    <button type="button" class="btn btn-warning me-5" onclick="openToast('warning')">Warning Toast
                    </button>
                    <button type="button" class="btn btn-danger me-5" onclick="openToast('danger')">Danger Toast
                    </button>
                    <button type="button" class="btn btn-info" onclick="openToast('info')">Info Toast</button>
                </div>
            </div>
        </div>
    </div>
@endsection
