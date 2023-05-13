@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column">
        <div class="mb-5">
            <form class="d-flex position-relative">
                <div class="position-relative d-flex width-320">
                    <span
                        class="position-absolute d-flex align-items-center top-0 bottom-0 left-0 text-gray-600 ms-3">
                       <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input class="form-control ps-8" type="search" data-datatable-filter="search" id="search-table"
                           placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        @include('users.table')
    </div>
    @include('layouts.templates.actions')
@endsection
@section('page_js')
    <script>
        let recordsURL = "{{ route('components.bootstrap.yajra-tables') }}";
    </script>
    <script src="{{mix('assets/js/users/users.js')}}"></script>
@endsection
