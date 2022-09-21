<!---- Footer Start ----->
<footer>
    <div class="container">
        <div class="site-address">
            <p>{{app('contact')->contact_address}}</p>
            <p>{{app('contact')->contact_tel}} @if(app('contact')->contact_tel)@endif {{app('contact')->contact_phone}}</p>
               
        </div>
        <div class="map-footer">
            <div class="conta">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.102294098159!2d35.556879415036555!3d33.887019233866596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16240b3a8431%3A0xd98f4ba42291b38c!2sBrandem!5e0!3m2!1sen!2slb!4v1655233708368!5m2!1sen!2slb" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div></div>
        <div class="footer-menu">
            <ul>
                <li><a title="home" href="{{ route('home') }}">home</a></li>
                <li><a title="about us" href="{{ route('about-us') }}">about us</a></li>
                <li><a title="our services" href="{{ route('our-services') }}">our services</a></li>
                <li><a title="our work" href="{{ route('our-work') }}">our work</a></li>
                <li><a title="get in touch" href="{{ route('get-in-touch') }}">get in touch</a></li>
                <!-- <li><a title="blog" href="{{ route('blog') }}">blog</a></li> -->
            </ul>
        </div>
        
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">&copy; <?php echo date("Y"); ?> Brandem . All Rights Reserved.<div class="d-none"><a href="http://webneoo.com">Webneoo</a></div></div>
            <div class="footer-social-icon display2">
                @if(app('contact')->facebook)
                <div>
                    <a title="facebook" href="{{app('contact')->facebook}}"><i class="fab fa-facebook-f"></i></a>
                </div>
                @endif
                @if(app('contact')->instagram)
                <div>
                    <a title="instagram" href="{{app('contact')->instagram}}"><i class="fab fa-instagram"></i></a>
                </div>
                @endif
                @if(app('contact')->linkedin)
                <div>
                    <a title="linkedin" href="{{app('contact')->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                </div>
                @endif
                @if(app('contact')->whatsapp)
                <div>
                    <a title="whatsapp" href="{{app('contact')->whatsapp}}"><i class="fab fa-whatsapp"></i></a>
                </div>
                @endif
                @if(app('contact')->twitter)
                <div>
                    <a title="twitter" href="{{app('contact')->twitter}}"><i class="fab fa-twitter"></i></a>
                </div>
                @endif
                @if(app('contact')->youtube)
                <div>
                    <a title="youtube" href="{{app('contact')->youtube}}"><i class="fab fa-youtube"></i></a>
                </div>
                @endif
                @if(app('contact')->pinterest)
                <div>
                    <a title="pinterest" href="{{app('contact')->pinterest}}"><i class="fab fa-pinterest"></i></a>
                </div>
                @endif
            </div>
        </div>
    </div>
    <p id="back-top"><a title="top" href="#top"><i class="fas fa-angle-up"></i></a></p>
</footer>
<!---- Footer End ----->