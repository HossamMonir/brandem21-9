<aside class="main-sidebar">
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="header">General</li>
            
            <li class="{{ request()->route()->uri() == 'admin' ? 'active' : '' }}">
                <a href="{{ route('admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ request()->route()->uri() == 'admin/pages' ? 'active' : '' }}">
                <a href="{{ route('pages-index') }}">
                    <i class="fa fa-list-alt"></i><span>Pages & SEO</span>
                </a>
            </li>

            <li class="{{ request()->route()->uri() == 'admin/slider-images' ? 'active' : '' }}">
                <a href="{{route('slider-images-index')}}">
                    <i class="fa fa-list-alt"></i><span>Homepage Slider</span>
                </a>
            </li>
             
             <li class="{{ request()->route()->uri() == 'admin/homepage' ? 'active' : '' }}">
                <a  href= "{{route('homepage-index')}}">
                  <i class="fa fa-list-alt"></i> <span>Home</span>
                </a>
            </li>
            
            <li class="{{ request()->route()->uri() == 'admin/about' ? 'active' : '' }}">
                <a href="{{ route('about-index')}}">
                    <i class="fa fa-list-alt"></i><span>About</span>
                </a>
            </li>

            <li class="{{ request()->route()->uri() == 'admin/services' ? 'active' : '' }}">
                <a href="{{ route('services-index')}}">
                    <i class="fa fa-list-alt"></i><span>Services</span>
                </a>
            </li>

            <li class="{{ request()->route()->uri() == 'admin/work' ? 'active' : '' }}">
                <a href="{{ route('work-index')}}">
                    <i class="fa fa-list-alt"></i><span>Our Work</span>
                </a>
            </li>

            <li class="{{ request()->route()->uri() == 'admin/blog' ? 'active' : '' }}">
                <a  href= "{{ route('blog-index')}}">
                    <i class="fa fa-list-alt"></i> <span>Blog</span>
                </a>
            </li>
            
            <li class="{{ request()->route()->uri() == 'admin/client' ? 'active' : '' }}">
                <a  href= "{{ route('client-index')}}">
                  <i class="fa fa-list-alt"></i> <span>Client</span>
                </a>
            </li>

              <li class="{{ request()->route()->uri() == 'admin/testimonials' ? 'active' : '' }}">
                <a  href= "{{ route('testimonials-index')}}">
                  <i class="fa fa-list-alt"></i> <span>Testimonials</span>
                </a>
            </li>

            

            <li class="header">Settings</li>

            <li class="{{ request()->route()->uri() == 'admin/settings' ? 'active' : '' }}">
                <a  href= "{{ route('admin-settings')}}">
                    <i class="fa fa-list-alt"></i> <span>Settings</span>
                </a>
            </li>

            <li class="header">Logout</li>

            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>