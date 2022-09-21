<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    {!! SEO::generate() !!}

    <meta name="author" content="Webneoo">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!------ fonts css --------------->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!------ design css --------------->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog-filter.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsivenew.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/globle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/added-designs.css') }}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4G9RLT0XV9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-4G9RLT0XV9');
    </script>

    <meta name="google-site-verification" content="vKRaMAfblx5YyvsMVppzyGRshUs805Vb58_IqfMh01w" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    @include('layouts.header')

    @yield('content')

    <!-- Place <div> tag where you want the feed to appear -->
    <section class="our-work">
        <h1>STAY CONNECTED <span>follow us on <a href="https://www.instagram.com/wearebrandem" target="_blank">@wearebrandem</a></span></h1>
        <div id="curator-feed-default-feed-layout"></div>
    </section>

    @include('layouts.footer')

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript">
        <?php if(request()->routeIs('get-in-touch') )  { ?>
            $("#submit").click(function() {
                $(this).css("background", "#b91421");
            });
            $("a").click(function() {
                //background:#b91421; color:#fff;
                if ($(this).attr('id').length > 0) {
                    if ($(this).attr("data-selected") == 1) {
                        $(this).css("background", "#0000");
                        $(this).css("color", "#000");
                        $(this).attr("data-selected", "0");
                    } else {
                        $(this).css("background", "#b91421");
                        $(this).css("color", "#fff");
                        $(this).attr("data-selected", "1");
                    }
                    $("interest").val($(this).attr('id'));
                }
            });
        <?php   } ?>

        // services popup
        <?php if(request()->routeIs('our-services') || request()->routeIs('/'))  { 
            for($i=0; $i<=count($services); $i++) { ?>
                if (window.location.hash == '#service-{{$i}}') {
                    $('#para-{{$i}}').addClass('highlight');
                }
            <?php   } 
        } ?>
    </script>

    <!-- The Javascript can be moved to the end of the html page before the </body> tag --><script type="text/javascript">
    /* curator-feed-default-feed-layout */
    (function(){
    var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
    i.src="https://cdn.curator.io/published/8016fbae-35ca-4ddf-8061-61c8022cb1eb.js";
    e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
    })();
    </script>

</body>
</html>