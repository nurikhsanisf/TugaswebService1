@extends('layout.app')
@section('content')
    <div class="banner-top-thumb-wrap">
        <div class="d-lg-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between  mb-3 mb-lg-0">
                <div>
                    <img
                        src="assets/images/dashboard/star-magazine-1.jpg"
                        alt="thumb"
                        class="banner-top-thumb"
                    />
                </div>
                <h5 class="m-0 font-weight-bold">
                    The morning after: What people
                </h5>
            </div>
            <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                    <img
                        src="assets/images/dashboard/star-magazine-2.jpg"
                        alt="thumb"
                        class="banner-top-thumb"
                    />
                </div>
                <h5 class="m-0 font-weight-bold">How Hungary produced the</h5>
            </div>
            <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                    <img
                        src="assets/images/dashboard/star-magazine-3.jpg"
                        alt="thumb"
                        class="banner-top-thumb"
                    />
                </div>
                <h5 class="m-0 font-weight-bold">
                    A sleepy island paradise's most
                </h5>
            </div>
            <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                    <img
                        src="assets/images/dashboard/star-magazine-4.jpg"
                        alt="thumb"
                        class="banner-top-thumb"
                    />
                </div>
                <h5 class="m-0 font-weight-bold">
                    America's most popular national
                </h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="owl-carousel owl-theme" id="main-banner-carousel">
                <div class="item">
                    <div class="carousel-content-wrapper mb-2">
                        <div class="carousel-content">
                            <h1 class="font-weight-bold">
                                If you wanted to get rich, how would you do it?
                            </h1>
                            <h5 class="font-weight-normal  m-0">
                                Lorem Ipsum has been the industry's standard
                            </h5>
                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                        <div class="carousel-image">
                            <img src="assets/images/dashboard/banner.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content-wrapper mb-2">
                        <div class="carousel-content">
                            <h1 class="font-weight-bold">
                                If you wanted to get rich, how would you do it?
                            </h1>
                            <h5 class="font-weight-normal  m-0">
                                Lorem Ipsum has been the industry's standard
                            </h5>
                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                        <div class="carousel-image">
                            <img src="assets/images/dashboard/banner_1.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content-wrapper mb-2">
                        <div class="carousel-content">
                            <h1 class="font-weight-bold">
                                If you wanted to get rich, how would you do it?
                            </h1>
                            <h5 class="font-weight-normal  m-0">
                                Lorem Ipsum has been the industry's standard
                            </h5>
                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                        <div class="carousel-image">
                            <img src="assets/images/dashboard/banner_2.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content-wrapper mb-2">
                        <div class="carousel-content">
                            <h1 class="font-weight-bold">
                                If you wanted to get rich, how would you do it?
                            </h1>
                            <h5 class="font-weight-normal  m-0">
                                Lorem Ipsum has been the industry's standard
                            </h5>
                            <p class="text-color m-0 pt-2 d-flex align-items-center">
                                <span class="fs-10 mr-1">2 hours ago</span>
                                <i class="mdi mdi-bookmark-outline mr-3"></i>
                                <span class="fs-10 mr-1">126</span>
                                <i class="mdi mdi-comment-outline"></i>
                            </p>
                        </div>
                        <div class="carousel-image">
                            <img src="assets/images/dashboard/banner_3.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                @foreach($bbc as $artBbc)
                <div class="col-sm-6">
                    <div class="py-3 border-bottom">
                        <div class="d-flex align-items-center pb-2">
                            <img
                                src="assets/images/dashboard/Profile_1.jpg"
                                class="img-xs img-rounded mr-2"
                                alt="thumb"
                            />
                            <span class="fs-12 text-muted">{{ $artBbc->author }}</span>
                        </div>
                        <p class="fs-14 m-0 font-weight-medium line-height-sm">
                            {{ $artBbc->title }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="world-news">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                    <h3 class="section-title">Headline News</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($artikel as $art)
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img
                        src="{{ $art->urlToImage }}"
                        class="img-fluid"
                        alt="world-news"
                    />
                    <span class="thumb-title">HEADLINE NEWS</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                    {{ $art->title }}
                </h5>
                <p class="fs-15 font-weight-normal">
                    {{ $art->description }}
                </p>
                <a href="#" class="font-weight-bold text-dark pt-2"
                >Read Article</a
                >
            </div>
            @endforeach
        </div>
    </div>
@endsection

