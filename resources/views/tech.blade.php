@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Technology
                </h1>
                <p class="text-secondary fs-15">
                News that provides information about technology
                </p>
            </div>
            <h5 class="text-muted font-weight-medium mb-3">Tech News</h5>
        </div>
    </div>

    <div class="col-lg-12  mb-5 mb-sm-2">
        <div class="row">
            @foreach($responseTechNews as $responseTechNewss)
            <div class="col-sm-4  mb-3 mb-sm-1">
                <div class="position-relative image-hover">
                    <img
                        src="{{  $responseTechNewss->thumb }}"
                        class="img-fluid"
                        alt="world-news"
                    />
                    <span class="thumb-title">TECHNOLOGY NEWS</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    {{ $responseTechNewss->title }}
                </h5>
                <p class="fs-15 font-weight-normal">
                    {{ $responseTechNewss->desc }}
                </p>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">Update Tech News</h5>
        </div>
    </div>
    <div class="row mb-4">
        @foreach($responseTechUpdateNews as $responseTechUpdateNewss)
        <div class="col-sm-3  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{ $responseTechUpdateNewss->thumb }}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">UPDATE TECHNOLOGY</span>
            </div>
            <h5 class="font-weight-600 mt-3">
                {{ $responseTechUpdateNewss->title }}
            </h5>
        </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">Tips Tech</h5>
        </div>
    </div>

    <div class="row">
        @foreach($responseTechTips as $responseTechTipss)
        <div class="col-sm-3  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{ $responseTechTipss->thumb }}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">WORLD</span>
            </div>
            <h5 class="font-weight-600 mt-3">
                {{ $responseTechTipss->title }}
            </h5>
        </div>
        @endforeach
    </div>
@endsection
