<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin') }}" class="logo">We are Brandem</a>
    <!--<a href="welcome.php" class="logo"><img src="../images/logo.png" height="40" ></a>-->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            	  <li class="messages-menu">
                    <button class="btn"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout&nbsp;&nbsp;<i class="fa fa-sign-out"></i></button>
                </li>
            </ul>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
</header>