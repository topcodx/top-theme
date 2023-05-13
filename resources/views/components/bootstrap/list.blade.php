@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="mb-5">List Group</h1>
        <div class="d-flex flex-column">
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="card-title fs-3 mb-0">Basic and Active List</h2>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-6 mb-5 mb-sm-0">
                            <ul class="list-group">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-group">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item active" aria-current="true">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title fs-3 mb-0">Links and buttons</h2>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-6 mb-5 mb-sm-0">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    The current link item
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                                   aria-disabled="true">
                                    A disabled link item
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                    The current button
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">
                                    A second item
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">
                                    A third button item
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">
                                    A fourth button item
                                </button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>
                                    A disabled button item
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
