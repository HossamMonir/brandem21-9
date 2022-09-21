@extends('layouts.app')

@section('content')

    @foreach($about as $a)

    <section class="about-section {{ $a->section_color ? 'inverted' : '' }}" style="background-color:{{ $a->section_color }}">

        <div class="about-header">

            @if($a->section_image)
            <img src='{{ asset("images/$a->section_image") }}' alt="{{ $a->section_title }}" title="{{ $a->section_title }}" />
            @endif

            <div class="main-title">
                <div class="container">
                    <h1>
                        <span>{{ $a->section_title }}</span><br class="clear">
                        <span class="sub-title">{{ $a->section_title2 }}</span>
                    </h1>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="content">

                <div class="content-text">
                    @if($a->section_subtitle)<h6>{{ $a->section_subtitle }}</h6>@endif
                    {!! $a->section_text !!}
                </div>
                
                @if($a->id==3)
                <div class="our-secret">
                    <div class="secrets-list">
                        <div class="secret-slider">
                            <h2>Our Secret<span>* Explore what’s out there.</span></h2>
                            <p>Research provides power and inspiration. Extract insights that pinpoint the Unique Selling
                                Proposition that makes your brand stand out from the competition. Accordingly create bespoke
                                multidisciplinary solutions.</p>
                        </div>
                        <div class="secret-slider">
                            <h2>Our Focus<span>* People come first.</span></h2>
                            <p>Identify what strikes a chord and resonates with people to build a successful brand. The
                                consumer is the hero, starting point and focus.</p>
                        </div>
                        <div class="secret-slider">
                            <h2>Our Spark<span>* Never settle.</span></h2>
                            <p>Push boundaries. Challenge the ordinary. Transform ideas into action. Dive into the powerful
                                flow of change. Every single day.</p>
                        </div>
                        <div class="secret-slider">
                            <h2>Our Direction<span>* Go beyond the usual.</span></h2>
                            <p>Create innovative ideas and concepts. Think, do, make and influence by crafting
                                multidisciplinary and integrated design solutions.</p>
                        </div>
                        <div class="secret-slider">
                            <h2>Our Spirit<span>* Team up for success.</span></h2>
                            <p>Partnering with clients, suppliers and creative minds yields the best results. Open a
                                dialogue. Start a conversation. Collaboration works.</p>
                        </div>
                    </div>
                </div>
                @endif

                @if($a->id==4)
                <div class="engage-service">
                    <ul class="list-inline">
                        <li class="list-inline-item engage">
                            <div class="engage-icon"><img src="{{ asset('images/engage1.png') }}" alt="Inquire image" title="Inquire image" /></div>
                            <div class="engage-title">Inquire</div>
                            <p><a title="Inquire" href="javascript:;" id="about-engage">We journey into your business to gain real knowledge and insight.</a></p>
                            <div id="about-popup" class="about-popup">
                                <div class="about-popcontent">
                                    <ul>
                                        <li>Consumer Insights &amp; Trends</li>
                                        <li> Market &amp; Industry Analysis</li>
                                        <li> Competitive Landscape Review</li>
                                        <li> Brand Audit</li>
                                        <li> Experience Benchmarking</li>
                                        <li> Stakeholder Interviews</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item influence">
                            <div class="engage-icon"><img src="{{ asset('images/engage2.png') }}" title="Influence image" alt="Influence image" /></div>
                            <div class="engage-title">Influence</div>
                            <p><a title="Influence" href="javascript:;" id="about-influence">We construct solid foundations and pinpoint elements that can give you the advantage.</a></p>
                            <div id="influence-popup" class="about-popup">
                                <div class="about-popcontent">
                                    <ul>
                                        <li>Audience segmentation</li>
                                        <li> Brand Positioning</li>
                                        <li> Brand Attributes</li>
                                        <li> Brand Personality</li>
                                        <li> Brand Essence</li>
                                        <li> Brand Architecture</li>
                                        <li> Naming</li>
                                        <li> Brand Strategy</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item innovate">
                            <div class="engage-icon"><img src="{{ asset('images/engage3.png') }}" title="innovate image" alt="innovate image" /></div>
                            <div class="engage-title">Innovate</div>
                            <p><a title="Innovate" href="javascript:;" id="about-Innovate">We brainstorm, hunt for inspiration, channel creativity and craft memorable concepts.</a></p>
                            <div id="innovate-popup" class="about-popup">
                                <div class="about-popcontent">
                                    <ul>
                                        <li>Creative Orientation</li>
                                        <li> Brand Identity</li>
                                        <li> Brand Language</li>
                                        <li> Communication</li>
                                        <li> Signage & Wayfinding</li>
                                        <li> Retail & Environment</li>
                                        <li> Digital & Interactive</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item implement">
                            <div class="engage-icon"><img src="{{ asset('images/engage4.png') }}" alt="Implement image" title="Implement image" /></div>
                            <div class="engage-title">Implement</div>
                            <p><a title="Implement" href="javascript:;" id="about-Implement">We remain true to your brand while transforming creative concepts into tangible results.</a></p>
                            <div id="implement-popup" class="about-popup">
                                <div class="about-popcontent">
                                    <ul>
                                        <li>Design Development</li>
                                        <li>Print Ready Artwork</li>
                                        <li>Brand Guidelines</li>
                                        <li>Print Specifications</li>
                                        <li>Production Management</li>
                                        <li>Brand Guardianship</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif

            </div>
        </div>
    </section>

    @endforeach

@endsection
