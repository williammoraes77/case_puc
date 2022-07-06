<header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="/assets/theme/assets/images/puc.jpeg" style="max-width: 60px;">
                            <img class="dark-logo" src="/assets/theme/assets/images/puc.jpeg">
                        </span>
                        <span class="text">

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>

                    </ul>

                    <ul class="right">
                        <!-- ============================================================== -->
                        <!-- Profile icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="/assets/theme/assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="/assets/theme/assets/images/users/2.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <!-- <a><i class="material-icons">power_settings_new</i> -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <!-- <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link> -->
                                            <button class="btn-large w100 red accent-4" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                Logout
                                            </button>
                                        </form>
                                    <!-- </a> -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
</header>

<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li class="side-wrap">
            <ul class="collapsible">
                <li class="small-cap"><span class="hide-menu">PERSONAL</span></li>
                <li>
                    <a href="{{route('home')}}" class="collapsible-header"><i class="material-icons">home</i><span class="hide-menu"> Home</span></a>
                </li>
                <li>
                    <a href="{{route('dashboard')}}"  class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
                </li>
                <li>
                    <a href="{{route('search')}}"  class="collapsible-header"><i class="material-icons">library_add</i><span class="hide-menu"> Assinaturas</span></a>
                </li>
                <li>
                    <a href="{{route('logs')}}"  class="collapsible-header"><i class="material-icons">event_note</i><span class="hide-menu"> Logs</span></a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
