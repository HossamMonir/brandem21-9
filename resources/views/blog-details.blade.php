@extends('layouts.app')

@section('content')

<!---- Section Start ----->
<section class="blog-detail-main">
	<div class="container">
    	<div class="col-sm-1 fl">
        	<div class="blog-detail-box">
            	<div class="blog-top">
                  <div class="blogd-title">EDITORIAL</div>
                  <div class="blogd-title2">This is the title of the blog, use as place maker only</div>
                  <div class="blog-bio"><span>Gwen Abou Jaoude</span> on 14.11.2017</div>
                </div>
                <div class="blog-detpic"><img src='{{ asset("images/blog-detail-pic.jpg") }}'/></div>
                <div class="blog-detcontent">
                	<p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact and reputation. Tell meaningful stories. Craft the right image.  Immerse ourselves to deliver experiences. Avoid formulas and advocate customization. And offer services that create results.</p>
                    <p>From brief to implementation, we take a step back to see the bigger picture and then dive deep to concentrate on the details. By using our special blend of creativity and strategy, we sculpt solutions that evolve with you, target your precise audience and respond to market shifts. Brandem offers the requirements businesses and brands can no longer live without in this highly competitive era while going beyond the ordinary. Only the outstanding can make the cut.</p>
                    <p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact and reputation. Tell meaningful stories. Craft the right image.  Immerse ourselves to deliver experiences. Avoid formulas and advocate customization. And offer services that create results. From brief to implementation, we take a step back to see the bigger picture and then dive deep to concentrate on the details. By using our special blend of creativity and strategy, we sculpt solutions that evolve with you, target your precise audience and respond to market shifts. Brandem offers the requirements businesses and brands can no longer live without in this highly competitive era while going beyond the ordinary. Only the outstanding can make the cut.</p>
                </div>
                <div class="blog-bottom display">
                    <ul>
                        <li>
                            <div class="prev-blog">
                                <a href="#">PREVIOUS POST<span>BEIRUT MARATHON ASSOCIATION</span></a>
                            </div>
                        </li>
                        <li>
                          <div class="back-gallery"><a href="blog.html"><img src='{{ asset("images/back-to-gallery-icon.png") }}'/>Back to Gallery</a></div></li>
                        <li>
                            <div class="share-post">
                                <label>SHARE THIS POST</label>
                                <div><a href="#"><i class="fa fa-facebook">&#xf09a;</i></a></div>
                                <div><a href="#"><i class="fa fa-instagram">&#xf16d;</i></a></div>
                                <div><a href="#"><i class="fa fa-linkedin">&#xf0e1;</i></a></div>
                                <div><a href="#"><i class="fa fa-twitter">&#xf099;</i></a></div>
                            </div>
                        </li>
                        <li>
                            <div class="next-blog">
                                <a href="#">NEXT POST<span>NOTREDAME UNIVERSITY</span></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="col-sm-2 fr">
        	<div class="blog-search"><input name="Search" type="text" placeholder="Search"></div>
            <div class="recent-blog">
            	<h6>Recent</h6>
                <ul>
                	<li><a href="#">5 Essential Qualities of a Great Logo</a>14.11.2017</li>
                    <li><a href="#">Boost Your Brand With 7 Easy Hacks</a>14.11.2017</li>
                    <li><a href="#">4 Leadership Lessons I Learned From My Entrepreneurial Father</a>14.11.2017</li>
                    <li><a href="#">8 Killer Tips for Female Entrepreneurs</a>14.11.2017</li>
                    <li><a href="#">Why Hire a Branding Agency?</a>14.11.2017</li>
                </ul>
            </div>
            <div class="categories-blog">
            	<h6>categories</h6>
                <ul>
                	<li><a href="#">Branding</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Editorial</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Communication</a></li>
                    <li><a href="#">Insights</a></li>
                </ul>
            </div>
        </div>
        <div class="blog-bottom display-bot">
        	<ul>
            	<li>
                	<div class="prev-blog">
                		<a href="#">PREVIOUS POST<span>BEIRUT MARATHON ASSOCIATION</span></a>
                    </div>
                </li>
                <li>
                  <div class="back-gallery"><a href="blog.html"><img src='{{ asset("images/back-to-gallery-icon.png") }}'/>Back to Gallery</a></div></li>
                <li>
                	<div class="share-post">
                    	<label>SHARE THIS POST</label>
                        <div><a href="#"><i class="fa fa-facebook">&#xf09a;</i></a></div>
                        <div><a href="#"><i class="fa fa-instagram">&#xf16d;</i></a></div>
                        <div><a href="#"><i class="fa fa-linkedin">&#xf0e1;</i></a></div>
                        <div><a href="#"><i class="fa fa-twitter">&#xf099;</i></a></div>
                    </div>
                </li>
                <li>
                	<div class="next-blog">
                		<a href="#">NEXT POST<span>NOTREDAME UNIVERSITY</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!---- Section End ----->

@endsection

