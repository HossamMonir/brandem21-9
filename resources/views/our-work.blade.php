@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@section('content')
    <!---- Section Start ----->
    <section>

        <div class="container-fluid our-work my-4">

            <div class="row justify-content-center mb-3">
                <div class="works-filter text-center col-md-10">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">All</button>
                        </li>
                        @foreach ($services as $s)
                            <li class="nav-item" role="presentation">
                                <button class="filter-btn" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="{{ $s->id }}" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">{{ $s->title }}</button>
                            </li>
                        @endforeach

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                        </div>
                        @foreach ($services as $service)
                            <div class="tab-pane fade" id="{{ $service->id }}" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                @foreach ($service->works as $serv)
                                    <li
                                        class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 p-0 mix {{ preg_replace('/--/', ' ', preg_replace('/[^a-z0-9]/', '-', strtolower($serv->capabilities))) }} lazy">

                                        <a href="{{ route('our-work-details', $serv->id) }}">
                                            <div class="work-thumb h-100">
                                                <img class="h-100" src='{{ asset('images/work/' . $serv->image) }}'
                                                    alt="{{ $serv->title }}" title="{{ $serv->title }}" />
                                                <div class="caption">
                                                    <div class="blur"></div>
                                                    <div class="caption-text">
                                                        <h1>{{ $serv->title }}</h1>
                                                        <p>{{ $serv->subtitle }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    {{-- <button class="filter-btn" data-filter="all">All</button>
                    @foreach ($services as $s)
                        <button class="filter-btn"
                            data-filter=".{{ preg_replace('/[^a-z0-9]/', '-', strtolower($s->title)) }}">{{ $s->title }}</button>
                    @endforeach --}}
                </div>
            </div><!-- end of row -->

            <ul class="row d-flex align-content-stretch flex-wrap works-grid" id="mix-wrapper">

                @foreach ($works as $work)
                    <li
                        class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 p-0 mix {{ preg_replace('/--/', ' ', preg_replace('/[^a-z0-9]/', '-', strtolower($work->capabilities))) }} lazy">

                        <a href="{{ route('our-work-details', $work->id) }}">
                            <div class="work-thumb h-100">
                                <img class="h-100" src='{{ asset('images/work/' . $work->image) }}'
                                    alt="{{ $work->title }}" title="{{ $work->title }}" />
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
    </section>
    <!---- Section End ----->

    <!---- CTA Start ----->
    <section class="work-together">
        <div class="hellow-banner">
            <div class="get-touch-center">
                <div class="get-touch-main">
                    <h1>We love to communicate.<span>Reach out to us so we can</span><span>help your brand reach out.</span>
                    </h1>
                </div>
            </div>
            <h1>LET'S WORK TOGETHER<span>and deliver game changing potential!</span></h1>
        </div>
        <div class="more-link position"><a href="{{ route('get-in-touch') }}">LET’S TALK</a></div>
    </section>
    <!---- CTA End ----->
@endsection
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
