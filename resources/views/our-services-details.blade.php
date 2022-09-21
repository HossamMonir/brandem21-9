@extends('layouts.app')

@section('content')
    @foreach ($details as $detail)
        <section class="about-section{{ $detail->section_color ? 'inverted' : '' }}"
            style="background-color:{{ $detail->section_color }}">
            <div class="about-header">

                @if ($detail->section_image)
                    <img src='{{ asset("images/$detail->section_image") }}' alt="{{ $detail->section_title }}"
                        title="{{ $detail->section_title }}" />
                @endif

                <div class="main-title">
                    <div class="container">
                        <h1>
                            <span>{{ $detail->section_title }}</span><br class="clear">
                            <span class="sub-title">{{ $detail->section_title2 }}</span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <div class="container">
        <div class="content">
            <div class="content-text">
                <h2> OUR SERVICE</h2>
                <h6>{{ $service->title }}</h6>
                <img src='{{ asset("images/$service->image") }}' alt="{{ $service->title }}"
                    title="{{ $service->title }}" />
                <p>{{ $service->text }}</p>

            </div>
        </div>
    </div>

    <div class="container-fluid our-work my-4">
        <h1>Our LATEST WORK<span>Think. Do. Make. Impact</span></h1>
        <ul class="row d-flex align-content-stretch flex-wrap works-grid" id="mix-wrapper">

            @foreach ($works as $work)
                <li
                    class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 p-0 mix {{ preg_replace('/--/', ' ', preg_replace('/[^a-z0-9]/', '-', strtolower($work->capabilities))) }} lazy">

                    <a href="{{ route('our-work-details', $work->id) }}">
                        <div class="work-thumb h-100">
                            <img class="h-100" src='{{ asset("images/work/$work->image") }}' alt="{{ $work->title }}"
                                title="{{ $work->title }}" />
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>{{ $work->title }}</h1>
                                    <p>{{ $work->subtitle }}</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </li>
            @endforeach

        </ul>

    </div>
@endsection
