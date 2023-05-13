@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="mb-5">Carousel</h1>
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-xl-8 col-md-10 col-12 mx-auto">
                    <div id="carouselExampleCaptions" class="carousel slide rounded-10" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-10">
                            <div class="carousel-item active">
                                <div class="position-relative d-block carousel-img">
                                    <img src="{{asset('images/slider-1.png')}}" class="d-block" alt="hero">
                                </div>
                                <div class="carousel-caption">
                                    <h2 class="carousel-title text-white mb-0 mb-sm-3">First slide label</h2>
                                    <p class="fs-4 mb-0 d-none d-sm-block">Some representative placeholder content for
                                        the
                                        first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="position-relative d-block carousel-img">
                                    <img src="{{asset('images/slider-2.jpeg')}}" class="d-block" alt="hero">
                                </div>
                                <div class="carousel-caption">
                                    <h2 class="carousel-title text-white mb-0 mb-sm-3">Second slide label</h2>
                                    <p class="fs-4 mb-0 d-none d-sm-block">Some representative placeholder content for
                                        the
                                        first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="position-relative d-block carousel-img">
                                    <img src="{{asset('images/slider-3.jpg')}}" class="d-block" alt="hero">
                                </div>
                                <div class="carousel-caption">
                                    <h2 class="carousel-title text-white mb-0 mb-sm-3">Third slide label</h2>
                                    <p class="fs-4 mb-0 d-none d-sm-block">Some representative placeholder content for
                                        the
                                        first slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
