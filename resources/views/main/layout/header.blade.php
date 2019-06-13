<header {{ (Request::is('/'))?'style=position:absolute; left:0; right:0;top:0':'' }} class="page-head">
    <!-- RD Navbar Transparent-->
    <div class="rd-navbar-wrap clearfix">
        <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="40" class="rd-navbar rd-navbar-{{ Request::is('/')?'transparent':'default' }}" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true" data-md-focus-on-hover="false">
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <h4 class="panel-title veil-lg">@yield('MobileTitle')</h4>
                </div>
                <div class="rd-navbar-menu-wrap clearfix">
                    <!--Navbar Brand-->
                    <div class="rd-navbar-brand {{ (!Request::is('/'))?'pull-left':'' }}">
                        <a href="{{ url('/') }}" class="reveal-inline-block">
                            <div class="unit unit-xs-middle unit-lg unit-lg-horizontal unit-spacing-xxs">
                                <div class="unit-left"><img style="height: 90px;width: 350px;" src='{{ url('/images/logo/shanmugha-college-of-pharmacy-logo.png') }}' title="Shanmugha pharmacy logo" alt='Shanmugha pharmacy logo'/></div>
                                <div class="unit-body text-lg-left">
                                    <div class="rd-navbar-brand-title"></div>
                                    <div class="rd-navbar-brand-slogan text-light"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="rd-navbar-nav-wrap ">
                        <div class="rd-navbar-mobile-scroll">
                            <div class="rd-navbar-mobile-header-wrap">
                                <!--Navbar Brand Mobile-->
                                <div class="rd-navbar-mobile-brand"><a href="{{ url('/') }}"><img width='270' height='80' src='{{ url('/images/logo/shanmugha-college-of-pharmacy-logo.png') }}' title="Shanmugha pharmacy logo" alt='Shanmugha pharmacy logo'/></a></div>
                            </div>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="@yield('Home')"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="@yield('About')"><a href="#">About</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="{{ url('/about-institution') }}">About Institution</a></li>
                                        <li><a href="{{ route('vision-mission') }}">Vision & Mission</a></li>
                                        <li><a href="{{ route('chairman') }}">About Chairman</a></li>
                                        <li><a href="{{ route('vice-chairman') }}">About Vice Chairman</a></li>
                                        <li><a href="{{ route('Principal') }}">Principal's Message</a></li>
                                    </ul>
                                </li>
                                <li class="@yield('Academics')"><a href="#">Academics</a>
                                    <div class="rd-navbar-megamenu">
                                        <div class="row section-relative" >
                                            <ul class="col-lg-4">
                                                <li>
                                                    <h6><a href="{{ route('courses') }}">Courses</a></h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
                                                        <li><a href="{{ route('courses') }}">B.Pharm (4 years)</a></li>
                                                        <li><a href="{{ route('courses') }}">D.Pharm (2 years)</a></li>
                                                        <li><a href="{{ route('courses') }}">B.Pharm Lateral Entry (3 years)</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="col-lg-4">
                                                <li>
                                                    <h6>Facilities</h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
                                                        <li><a href="{{ route('Hostel') }}">Hostel</a></li>
                                                        <li><a href="{{ route('Cafeteria') }}">Cafeteria</a></li>
                                                        <li><a href="{{ route('Transport') }}">Transport</a></li>
                                                        <li><a href="{{ route('Library') }}">Library</a></li>
                                                        <li><a href="#">Auditorium</a></li>
                                                        <li><a href="#">Sports & Games</a></li>
                                                        <li><a href="#">Fitness Center</a></li>
                                                        <li><a href="{{ route('Student_Grievance') }}">Students Grievances</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="col-lg-4">
                                                <li>
                                                    <h6>Academic</h6>
                                                    <ul class="list-unstyled offset-lg-top-20">
                                                        <li><a href="{{ url('/images/news-letter/PCI-SIF2019-2020.pdf') }}" target="_blank">PCI - SIF (2019-2020)</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="@yield('Committes')"><a href="#">Committes</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="{{ route('Placement-Cell') }}">Placement Cell</a></li>
                                        <li><a href="{{ route('Anti-ragging-Squad') }}">Anti-ragging Squad</a></li>
                                        <li><a href="{{ route('Anti-Discrimination-Cell') }}">Anti-Discrimination Cell</a></li>
                                        <li><a href="{{ route('anti-ragging-committee') }}">Anti-Ragging Comittee</a></li>
                                        <li><a href="{{ route('sc-st-committe') }}">SC/ST</a></li>
                                    </ul>
                                </li>
                                <li class="@yield('Events')"><a href="{{ url('/events') }}">Events</a></li>
                                <li class="@yield('Contact')"><a href="{{ url('/contact') }}">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--RD Navbar Search-->
                    <div class="rd-navbar-brand-left pull-right">
                        <a href="{{ url('/') }}" class="reveal-inline-block">
                            <div class="unit unit-xs-middle unit-lg unit-lg-horizontal unit-spacing-xxs">
                                <div class="unit-right"><img style="height: 80px;width: 90px; padding-left: 10px" src='{{ url('/images/logo/shanmugha-educational-institution-logo.png') }}' title="Shanmugha pharmacy logo" alt='Shanmugha pharmacy logo'/></div>
                                <div class="unit-body text-lg-left">
                                    <div class="rd-navbar-brand-title"></div>
                                    <div class="rd-navbar-brand-slogan text-light"></div>
                                </div>
                            </div>
                        </a>
                    </div>
{{--                    <div class="rd-navbar-search">--}}
{{--                        <div class="unit-right"><img width='100' height='100' src='{{ url('/images/logo/shanmugha-educational-institution-logo.png') }}' alt=''/></div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </nav>
    </div>
</header>