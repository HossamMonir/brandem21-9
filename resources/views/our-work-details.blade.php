@extends('layouts.app')

@section('content')
    <section class="about-section">
        <div class="about-header">
            <img src="{{ asset('images/$work->imaga2') }}" alt='{{ $work->title }}' title='{{ $work->title }}' />

            <div class="main-title">
                <div class="container">
                    <h1>
                        <span>{{ $work->title }}</span><br class="clear">
                        <span class="sub-title">{{ $work->subtitle }}</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="our-work-left">
                <div class="work-content">
                    {!! $work->content !!}
                </div>
            </div>
            <div class="our-work-right mt-0 mt-sm-0 mt-md-4 mt-lg-4 mt-xl-4 mb-4 mb-sm-4">
                <div class="work-right-bio">
                    <ul>
                        <li><label>Client: </label>{{ $work_->client->name }}</li>
                        <li><label>Sector: </label>{{ $work->sector }}</li>
                        <li><label>Region: </label>{{ $work->region }}</li>
                    </ul>
                </div>
                <div class="capabilities-list">
                    <h6>Capabilities:</h6>
                    {!! $work->capabilities !!}
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="our-work-banner">

            @foreach ($details as $d)
                @if ($d->project_detail_type == 4)
                    <?php
                    $oembed_endpoint = 'http://vimeo.com/api/oembed';
                    // Grab the video url from the url, or use default
                    $video_url = $det['vimeo'];
                    // Create the URLs
                    $json_url = $oembed_endpoint . '.json?url=' . rawurlencode($video_url) . '';
                    $xml_url = $oembed_endpoint . '.xml?url=' . rawurlencode($video_url) . '';
                    // Curl helper function
                    function curl_get($url)
                    {
                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
                        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
                        $return = curl_exec($curl);
                        curl_close($curl);
                        return $return;
                    }
                    // Load in the oEmbed XML
                    $oembed = simplexml_load_string(curl_get($xml_url));
                    ?>
                    <div class="video-container">{{ html_entity_decode($oembed->html) }}</div>
                @elseif($d->project_detail_type == 3)
                    <div class="video-container"><iframe src="{{ $d->youtube }}"></iframe></div>
                @elseif($d->project_detail_type == 2)
                    <img src='{{ asset("images/work/$d->image") }}' class="img-fluid" alt="{{ $work->title }}"
                        title="{{ $work->title }}" />
                @elseif($d->project_detail_type == 1)
                    <div class="container">
                        <div class="other-content">
                            {!! $d->content !!}
                        </div>
                    </div>
                @endif
            @endforeach
            {{-- <div class="container">
                <div class="blog-bottom">
                    <ul class="row">
                        <li class="col-3">
                            <a class="text-dark" href="{{ $prev ? route('our-work-details', ['id' => $prev->id]) : '#' }}">
                                <div class="prev-blog">
                                    PREVIOUS Project<span>{{ $prev ? $prev->title : ' ' }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="col-3">
                            <div class="back-gallery">
                                <a href="{{ route('our-work') }}" title="our work">
                                    <img src="{{ asset('images/back-to-gallery-icon.png') }}" alt="back to our work"
                                        title="back to our work" />Back to Projects
                                </a>
                            </div>
                        </li>
                        <li class="col-3">
                            <div class="share-post">
                                <label>SHARE</label>
                                <div>
                                    <a title="facebook"
                                        href="https://www.facebook.com/sharer.php?u=http://technothinker.com/Projects/Brandem"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </div>
                                <div>
                                    <a title="instagram"
                                        href="https://www.facebook.com/sharer.php?u=http://technothinker.com/Projects/Brandem"
                                        target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div>
                                    <a title="linkedin"
                                        href="https://www.linkedin.com/shareArticle?mini=true&url=http://technothinker.com/Projects/Brandem"
                                        target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <div>
                                    <a title="twitter"
                                        href="https://twitter.com/share?url=http://technothinker.com/Projects/Brandem"
                                        target="_blank"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-3">
                            <a class="text-dark" href="{{ $next ? route('our-work-details', ['id' => $next->id]) : '#' }}">
                                <div class="next-blog">
                                    NEXT Project<span> {{ $next ? $next->title : ' ' }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}

        </div>
    </section>
    <!---- Section End ----->

    <!---- CTA Start ----->

    <!---- CTA End ----->
@endsection
