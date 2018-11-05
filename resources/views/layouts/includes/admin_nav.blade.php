<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a>
                </li>
                <li class="nav-item">
                    <img alt="branding logo" src="{{ URL::asset('images/icons/nav_logo.png') }}" data-expand="{{ URL::asset('images/icons/nav_logo.png') }}"
                         data-collapse="{{ URL::asset('images/icons/') }}" class="brand-logo">
                </li>
                <li class="nav-item hidden-md-up float-xs-right">
                    <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
                        <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs">
                            <i class="icon-menu5">  PeacockMoon Travel and Tour</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class="{{(Request::segment(1)=='dashboard') ? 'active' : 'unactive'}} nav-item">
                <a href="{{ URL::to('user/dashboard') }}">
                    <i class="icon-dashboard2"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="{{(Request::segment(1)=='requestlist') ? 'active' : 'unactive'}} nav-item">
                <a href="{{ URL::to('') }}">
                    <i class="icon-user"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Users</span>
                </a>
            </li>
            <li class="{{(Request::segment(1)=='paidlist') ? 'active' : 'unactive'}} nav-item">
                <a href="{{ URL::to('user/packages') }}">
                    <i class="icon-list"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Packages List</span>
                </a>
            </li>

            <li class="{{(Request::segment(1)=='category') ? 'active' : 'unactive'}} nav-item">
                <a href="{{ URL::to('category') }}">
                    <i class="icon-bookmark"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Rental List</span>
                </a>
            </li>

            <li class="{{(Request::segment(1)=='export') ? 'active' : 'unactive'}} nav-item">
                <a href="{{ URL::to('export') }}">
                    <i class="icon-book3"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Booking List</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ URL::to('logout') }}">
                    <i class="icon-power-off"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">LogOut</span>
                </a>
            </li>
        </ul>
    </div>

</div>












