@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Games
                </h1>
                <p class="text-secondary fs-15">
                on this page can display all information about games
                </p>
            </div>
            <h5 class="text-muted font-weight-medium mb-3">Games News</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{ $responseHead->thumb }}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">GAMES</span>
            </div>
            <h1 class="font-weight-600 mt-3">
                {{ $responseHead->title }}
            </h1>
            <p class="fs-15 font-weight-normal">
                {{ $responseHead->author }}
            </p>
        </div>
        <div class="col-lg-6  mb-5 mb-sm-2">
            <div class="row">
                @foreach($responseGameNews as $responseGameNewss)
                <div class="col-sm-6  mb-5 mb-sm-2">
                    <h5 class="font-weight-600 mt-3">
                        {{ $responseGameNewss->title }}
                    </h5>
                    <p class="fs-15 font-weight-normal">
                        {{  $responseGameNewss->time }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">Update News Game</h5>
        </div>
    </div>
    <div class="row mb-4">
        @foreach($responseUpdateGameNews as $responseUpdateGameNewss)
        <div class="col-sm-3  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{ $responseUpdateGameNewss->thumb }}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">Update Game</span>
            </div>
            <h5 class="font-weight-600 mt-3">
                {{ $responseUpdateGameNewss->title }}
            </h5>
        </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">Game Console News</h5>
        </div>
    </div>
    <div class="row">
        @foreach($responseGameConsoleNews as $responseGameConsoleNewss)
        <div class="col-sm-3  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
                <img
                    src="{{ $responseGameConsoleNewss->thumb }}"
                    class="img-fluid"
                    alt="world-news"
                />
                <span class="thumb-title">Console Game</span>
            </div>
            <h5 class="font-weight-600 mt-3">
                {{ $responseGameConsoleNewss->title }}
            </h5>
        </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3"> E Sport Game News</h5>
        </div>
    </div>
    <div class="row">
        @foreach($responseGameESportNews as $responseGameESportNewss)
            <div class="col-sm-3  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                    <img
                        src="{{ $responseGameESportNewss->thumb }}"
                        class="img-fluid"
                        alt="world-news"
                    />
                    <span class="thumb-title">E Sport Game</span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    {{ $responseGameESportNewss->title }}
                </h5>
            </div>
        @endforeach
    </div>
@endsection
