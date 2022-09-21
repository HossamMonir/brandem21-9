@extends('layouts.app')

@section('content')

    <!---- Banner Start ----->
    {{-- @if ($video)
        <section class="videoContainer">
            <iframe class="videoContainer__video" width="1920" height="1080"
                src="https://www.youtube.com/embed/{{ $video }}?mute=1&autoplay=1&controls=0&showinfo=0"
                frameborder="0" allowfullscreen=""></iframe>
        </section>
    @endif --}}
    <section class="slider-main">
        <div class="hero" data-arrows="true" data-autoplay="true">
            @foreach ($slider as $slide)
                @if ($slide->image)
                    <div class="slide">
                        <img alt="{{ $slide->title }}" title="{{ $slide->title }}" class="img-fluid w-100"
                            src='{{ asset("images/slider/$slide->image") }}'>
                        @if ($slide->title || $slide->link)
                            <div class="header-content text-white position-absolute slide-content col-lg-4">
                                <h1 class="mb-2">{{ $slide->title }} <span
                                        class="d-block font-weight-bold">{{ $slide->title2 }}</span></h1>
                                @if ($slide->link)
                                    <div class="more-link mt-2"><a href="{{ $slide->link }}">Know More</a></div>
                                @endif
                            </div>
                        @endif
                    </div>
                @else
                @endif
            @endforeach
        </div>
        <!--.hero-->
    </section>
    <!---- Banner End ----->
    {{-- start homepage --}}
    @foreach ($homepages as $homepage)
        <section class="about-section{{ $homepage->section_color ? 'inverted' : '' }}"
            style="background-color:{{ $homepage->section_color }}">
            <div class="about-header">

                @if ($homepage->section_image)
                    <img src='{{ asset('images/homepage/' . $homepage->section_image) }}'
                        alt="{{ $homepage->section_title }}" title="{{ $homepage->section_title }}" />
                @endif

                <div class="main-title">
                    <div class="container">
                        <h1>
                            <span>{{ $homepage->section_title }}</span><br class="clear">
                            <span class="sub-title">{{ $homepage->section_title2 }}</span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    {{-- end homepagw\e --}}
    <!---- About Start ----->
    <section class="who-we-are">
        <div class="container">
            <div class="small-title">WHO WE ARE</div>
            <h1>Branding and beyond <span>Strategy and tons of imagination.</span></h1>
            <p>We work by finely crafting your brand bit by bit knowing that every client is different and every job
                is
                unique. One size does not fit all. When strategy and creativity collide, great things happen.
                Solutions
                fall into place. Effective branding, communication and social media stand out. We’re not in the
                business
                of creating designs that are merely pretty or nice. We’re in the bold business of creating stories
                and
                experiences with positive impact and the power to become part of consumers’ lives. It's all about
                strategy. Plus tons of imagination.</p>
            <div class="more-link margin-top3"><a href="{{ route('about-us') }}">MORE ABOUT US</a></div>
        </div>
    </section>
    <!---- About End ----->

    <!---- Services Start ----->
    <section class="we-help">
        <div class="container">
            <h1>WE ARE HERE TO HELP <span>Inquire. Influence. Innovate. Implement.</span></h1>
            <div class="we-help-service">
                <ul>
                    @foreach ($services as $s)
                        <li>
                            <a href="{{ route('our-services') }}#service-{{ $s->id }}">
                                <div class="service-icon">
                                    <img src='{{ asset("images/$s->image") }}' alt="{{ $s->title }}"
                                        title="{{ $s->title }}" />
                                </div>
                                <div class="service-link">{{ $s->title }}</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="more-link"><a href="{{ route('our-services') }}">SEE OUR SERVICES</a></div>
        </div>
    </section>
    <!---- Services End ----->

    <!---- Work Start ----->
    <section class="our-work">
        <h1>Our LATEST WORK<span>Think. Do. Make. Impact</span></h1>
        <div class="latest-work-main">
            <ul class="center">
                @foreach ($work as $work)
                    <li>
                        <a href="{{ route('our-work-details', ['id' => $work->id]) }}">
                            <div class="work-thumb">
                                <img class="img-fluid" src='{{ asset("images/work/$work->image") }}'
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
            <div class="more-link"><a href=" {{ route('our-work') }}">SEE MORE OF OUR WORK</a></div>
        </div>
    </section>
    <!---- Work End ----->

    <!---- Testimonial Start ----->
    <section class="testimonial">
        <h1>
            <span>TESTIMONIALS</span><br class="clear">
            <span class="sub-title">of our awesome clients!</span>
        </h1>
        <div class="container">
            <div class="testimonial-sayings">
                <div class="secrets-list">
                    <div class="secret-slider">
                        <h2>Person Name<span>* Person title.</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="secret-slider">
                        <h2>Person Name<span>* Person title.</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="secret-slider">
                        <h2>Person Name<span>* Person title.</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="secret-slider">
                        <h2>Person Name<span>* Person title.</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- Testimonial End ----->

    <!---- Clients Start ----->
    <section class="clients">
        <h1>OUR CLIENTS<span>who have trusted us</span></h1>
        <div class="container">
            <div class="clients-list">
                @foreach ($clients as $client)
                    <div class="client">

                        <img src="{{ asset('images/client/' . $client->logo) }}" class="img-fluid" alt=""
                            title="">

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!---- Clients End ----->

    <section class="work-together">
        <div class="hellow-banner">
            <div class="get-touch-center">
                <div class="get-touch-main">
                    <h1>We love to communicate.<span>Reach out to us so we can</span><span>help your brand reach
                            out.</span>
                    </h1>
                </div>
            </div>
            <h1>LET'S WORK TOGETHER<span>and deliver game changing potential!</span></h1>
        </div>
        <div class="more-link position"><a href="{{ route('get-in-touch') }}">LET’S TALK</a></div>
    </section>
    <!---- CTA End ----->

@endsection
