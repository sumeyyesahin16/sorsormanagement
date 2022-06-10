<!--APP-SIDEBAR-->
                <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ url('/' . $page='index') }}">
                            <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{URL::asset('assets/images/brand/logo-1.png')}}"  class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{URL::asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                        </a><!-- LOGO -->
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                    </div>
                    <div class="app-sidebar__user">
                        <div class="dropdown user-pro-body text-center">
                            <div class="user-pic">
                                <img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="user-img" class="avatar-xl rounded-circle">
                            </div>
                            <div class="user-info">
                                <h6 class=" mb-0 text-dark">SorSor Admin</h6>
                                <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-navs">
                        <ul class="nav  nav-pills-circle">
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-settings"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-mail"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-user"></i>
                                </a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                                <a class="nav-link text-center m-2">
                                    <i class="fe fe-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="side-menu">
                        <li><h3>DASHBOARD</h3></li>

                        <li>
                            <a class="side-menu__item" href="{{ url('/' . $page='') }}"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span></a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">User Management</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='user/') }}"><span>User</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='user/tracking') }}"><span>User Tracking</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='user/commission') }}"><span>Commissions</span></a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Share Management</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='share/feed') }}"><span>Feed</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='share/photos') }}"><span>Photos</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='share/videos') }}"><span>Videos</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='share/posts') }}"><span>Posts</span></a></li>

                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Cash Management</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='cash/sorsorcash') }}"><span>SorSor Cash</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='cash/commissions') }}"><span>Commissions</span></a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">System Management</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='system/main_showcase') }}"><span>Main Showcase</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='system/discover_showcase') }}"><span>Discover Showcase</span></a></li>
                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Events Management</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='events/events') }}"><span>Events</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='events/eventCategories') }}"><span>Events Categories</span></a></li>

                            </ul>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Compaints Management</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ url('/' . $page='complaints/reported_users') }}"><span>Reported Users</span></a></li>
                                <li><a class="slide-item" href="{{ url('/' . $page='complaints/help') }}"><span>Help</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </aside>
<!--/APP-SIDEBAR-->
