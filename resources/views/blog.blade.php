@extends('layouts.app')

@section('content')

<!---- Section Start ----->
<section class="blog-main">
	<div class="container">
    	<label>sort by:</label>
    	<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter=".all, .editorial, .branding, .leadership, .culture, .business, .design, .projects, .insights, .advertising, .animation">All</span></li>
			<li><span class="filter" data-filter=".editorial">Editorial</span></li>
			<li><span class="filter" data-filter=".branding">Branding</span></li>
			<li><span class="filter" data-filter=".leadership">Leadership</span></li>
			<li><span class="filter" data-filter=".culture">Culture</span></li>
			<li><span class="filter" data-filter=".business">Business</span></li>
            <li><span class="filter" data-filter=".design">Design</span></li>
            <li><span class="filter" data-filter=".projects">Projects</span></li>
            <li><span class="filter" data-filter=".insights">Insights</span></li>
            <li><span class="filter" data-filter=".advertising">Advertising</span></li>
            <li><span class="filter" data-filter=".animation">Animation</span></li>
		</ul>

		<div id="portfoliolist">

			<div class="portfolio editorial all" data-cat="editorial">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog1.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio branding all" data-cat="branding">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog2.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio advertising all" data-cat="advertising">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog3.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio editorial all" data-cat="editorial">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog4.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio editorial all" data-cat="editorial">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog5.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio business all" data-cat="business">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog6.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio editorial all" data-cat="editorial">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog7.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio editorial all" data-cat="editorial">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog8.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

			<div class="portfolio editorial all" data-cat="editorial">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog9.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

            <div class="portfolio leadership all" data-cat="leadership">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog3.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

            <div class="portfolio culture all" data-cat="culture">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog5.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

            <div class="portfolio design all" data-cat="design">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog7.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

            <div class="portfolio projects all" data-cat="projects">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog1.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

            <div class="portfolio insights all" data-cat="insights">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog2.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

            <div class="portfolio animation all" data-cat="animation">
				<div class="portfolio-wrapper"><img src='{{ asset("images/blog4.jpg") }}'/></div>
                <div class="porfolio-detail">
                	<div class="por-thumb-title">EDITORIAL</div>
					<div class="por-sub-title">This is the title of the blog, use as place maker only</div>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact </p>
                    <div class="more-link"><a href="{{ route('blog-details', 1) }}">More</a></div>
                    <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
			</div>

		</div>
    </div>
</section>
<!---- Section End ----->

@endsection