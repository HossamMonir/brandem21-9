<!---- Header Start ----->
<header>
    <div class="container">
        <div class="logo">
            <a title="We are Brandem" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="We are Brandem Logo" title="We are Brandem Logo">
            </a>
        </div>
        <div class="navigation">
            <div class="nav-icon"></div>

            <div class="icons">
                @if (app('contact')->facebook)
                    <div class="icons-content">
                        <a title="facebook" href="{{ app('contact')->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                @endif
                @if (app('contact')->instagram)
                    <div class="icons-content">
                        <a title="instagram" href="{{ app('contact')->instagram }}"><i class="fab fa-instagram"></i></a>
                    </div>
                @endif

                @if (app('contact')->linkedin)
                    <div class="icons-content">
                        <a title="linkedin" href="{{ app('contact')->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                @endif

                @if (app('contact')->whatsapp)
                    <div class="icons-content">
                        <a title="whatsapp" href="{{ app('contact')->whatsapp }}"><i class="fab fa-whatsapp"></i></a>
                    </div>
                @endif
                @if (app('contact')->twitter)
                    <div class="icons-content">
                        <a title="twitter" href="{{ app('contact')->twitter }}"><i class="fab fa-twitter"></i></a>
                    </div>
                @endif
                @if (app('contact')->youtube)
                    <div class="icons-content">
                        <a title="youtube" href="{{ app('contact')->youtube }}"><i class="fab fa-youtube"></i></a>
                    </div>
                @endif
                @if (app('contact')->pinterest)
                    <div class="icons-content">
                        <a title="pinterest" href="{{ app('contact')->pinterest }}"><i class="fab fa-pinterest"></i></a>
                    </div>
                @endif
            </div>
        </div>
        <div class="menu-rightside">
            <nav class="menu">
                <ul>
                    <li>
                        <a title="home" class="{{ request()->routeIs('home') ? 'act' : '' }}"
                            href="{{ route('home') }}">home</a>
                    </li>
                    <li>
                        <a title="about us" class="{{ request()->routeIs('about-us') ? 'act' : '' }}"
                            href="{{ route('about-us') }}">about us</a>
                    </li>
                    <li>
                        <a title="our services" class="{{ request()->routeIs('our-services') ? 'act' : '' }}"
                            href="{{ route('our-services') }}">our services</a>
                    </li>
                    <li>
                        <a title="our work" class="{{ request()->routeIs('our-work') ? 'act' : '' }}"
                            href="{{ route('our-work') }}">our work</a>
                    </li>
                    <li>
                        <a title="get in touch" class="{{ request()->routeIs('get-in-touch') ? 'act' : '' }}"
                            href="{{ route('get-in-touch') }}">get in touch</a>
                    </li>
                    <!-- <li>
                        <a title="blog" class="{{ request()->routeIs('blog') ? 'act' : '' }}"
                            href="{{ route('blog') }}">blog</a>
                    </li> -->
                </ul>
            </nav>
            <div class="social-icon">
                @if (app('contact')->facebook)
                    <div>
                        <a title="facebook" href="{{ app('contact')->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                @endif
                @if (app('contact')->instagram)
                    <div>
                        <a title="instagram" href="{{ app('contact')->instagram }}"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                @endif
                @if (app('contact')->linkedin)
                    <div>
                        <a title="linkedin" href="{{ app('contact')->linkedin }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                @endif
                @if (app('contact')->whatsapp)
                    <div>
                        <a title="whatsapp" href="{{ app('contact')->whatsapp }}"><i class="fab fa-whatsapp"></i></a>
                    </div>
                @endif
                @if (app('contact')->twitter)
                    <div>
                        <a title="twitter" href="{{ app('contact')->twitter }}"><i class="fab fa-twitter"></i></a>
                    </div>
                @endif
                @if (app('contact')->youtube)
                    <div>
                        <a title="youtube" href="{{ app('contact')->youtube }}"><i class="fab fa-youtube"></i></a>
                    </div>
                @endif
                @if (app('contact')->pinterest)
                    <div>
                        <a title="pinterest" href="{{ app('contact')->pinterest }}"><i
                                class="fab fa-pinterest"></i></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
<!---- Header End ----->
