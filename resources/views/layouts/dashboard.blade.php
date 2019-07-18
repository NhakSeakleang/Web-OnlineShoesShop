@extends('layouts.master')

@section('title', 'Dashboard')

@section('stylesheet')



@endsection

@section('main-content')

    <body class="fixed-sn white-skin" data-gr-c-s-loaded="true">

    <!-- Main Navigation -->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed" style="transform: translateX(-100%);">
            <ul class="custom-scrollbar ps ps--theme_default" data-ps-id="eee7a945-3588-21f6-6ccf-0305dfcdf4e6">

                <!-- Logo -->
                <li class="logo-sn waves-effect py-3">
                    <div class="text-center">
                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="pl-0"><img src="./DashBoardV1_files/mdb-transaprent-noshadows.png"></a>
                    </div>
                </li>

                <!-- Search Form -->
                <li>
                    <form class="search-form" role="search">
                        <div class="md-form mt-0 waves-light waves-effect waves-light">
                            <input type="text" class="form-control py-2" placeholder="Search">
                        </div>
                    </form>
                </li>

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">

                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-tachometer-alt"></i>Dashboards<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html" class="waves-effect">Version 1</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-2.html" class="waves-effect">Version 2</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-3.html" class="waves-effect">Version 3</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-4.html" class="waves-effect">Version 4</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-5.html" class="waves-effect">Version 5</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-6.html" class="waves-effect">Version 6</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-image"></i>Pages<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/login.html" class="waves-effect">Login</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/register.html" class="waves-effect">Register</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/pricing.html" class="waves-effect">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/about.html" class="waves-effect">About us</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/single.html" class="waves-effect">Single post</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/post.html" class="waves-effect">Post listing</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/landing.html" class="waves-effect">Landing page</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/customers.html" class="waves-effect">Customers</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/invoice.html" class="waves-effect">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/page-creator.html" class="waves-effect">Page Creator</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/support.html" class="waves-effect">Support</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/pages/chat.html" class="waves-effect">Chat</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-user"></i>Profile<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/profile/basic-1.html" class="waves-effect">Basic 1</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/profile/basic-2.html" class="waves-effect">Basic 2</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/profile/extended.html" class="waves-effect">Extended</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fab fa-css3"></i>CSS<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/grid.html" class="waves-effect">Grid system</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/media.html" class="waves-effect">Media object</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/utilities.html" class="waves-effect">Utilities / helpers</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/code.html" class="waves-effect">Code</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/icons.html" class="waves-effect">Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/images.html" class="waves-effect">Images</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/typography.html" class="waves-effect">Typography</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/animations.html" class="waves-effect">Animations</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/colors.html" class="waves-effect">Colors</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/hover.html" class="waves-effect">Hover effects</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/masks.html" class="waves-effect">Masks</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/shadows.html" class="waves-effect">Shadows</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/css/skins.html" class="waves-effect">Skins</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-th"></i>Components<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/buttons.html" class="waves-effect">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/cards.html" class="waves-effect">Cards</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/collapse.html" class="waves-effect">Collapse</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/date.html" class="waves-effect">Date picker</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/list.html" class="waves-effect">List group</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/panels.html" class="waves-effect">Panels</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/pagination.html" class="waves-effect">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/popovers.html" class="waves-effect">Popovers</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/progress.html" class="waves-effect">Progress bars</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/stepper.html" class="waves-effect">Stepper</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/tabs.html" class="waves-effect">Tabs &amp; pills</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/tags.html" class="waves-effect">Tags, labels &amp; badges</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/time.html" class="waves-effect">Time picker</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/components/tooltips.html" class="waves-effect">Tooltips</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa far fa-check-square"></i>Forms<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/forms/basic.html" class="waves-effect">Basic</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/forms/extended.html" class="waves-effect">Extended</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-table"></i>Tables<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/tables/basic.html" class="waves-effect">Basic</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/tables/extended.html" class="waves-effect">Extended</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/tables/datatables.html" class="waves-effect">DataTables.net</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-map"></i>Maps<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/maps/google.html" class="waves-effect">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/maps/full.html" class="waves-effect">Full screen map</a>
                                    </li>
                                    <li>
                                        <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/maps/vector.html" class="waves-effect">Vector world map</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Simple link -->
                        <li>
                            <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/alerts/alerts.html" class="collapsible-header waves-effect"><i class="w-fa far fa-bell"></i>Alerts</a>
                        </li>
                        <li>
                            <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/modals/modals.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-bolt"></i>Modals</a>
                        </li>
                        <li>
                            <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/charts/charts.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-chart-pie"></i>Charts</a>
                        </li>
                        <li>
                            <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/calendar/calendar.html" class="collapsible-header waves-effect"><i class="w-fa far fa-calendar-check"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/sections/sections.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Sections</a>
                        </li>

                    </ul>
                </li>
                <!-- Side navigation links -->

                <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                    <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                    <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!-- Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
            </div>

            <!-- Breadcrumb -->
            <div class="breadcrumb-dn mr-auto">
                <p class="navbar-brand">Dashboard v.1</p>
            </div>

            <div class="d-flex change-mode">

                <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
                    <button class="btn btn-sm waves-effect waves-light btn-outline-black" id="dark-mode">Change Mode</button>
                </div>

                <!-- Navbar links -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">

                    <!-- Dropdown -->
                    <li class="nav-item dropdown notifications-nav">
                        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="badge red">3</span> <i class="fas fa-bell"></i>
                            <span class="d-none d-md-inline-block">Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#">
                                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                                <span>New order received</span>
                                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
                            </a>
                            <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#">
                                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                                <span>New order received</span>
                                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
                            </a>
                            <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#">
                                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                                <span>Your campaign is about to end</span>
                                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect" href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#">Log Out</a>
                            <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#">My account</a>
                        </div>
                    </li>

                </ul>
                <!-- Navbar links -->

            </div>

        </nav>
        <!-- Navbar -->

        <!-- Fixed button -->
        <div class="fixed-action-btn clearfix d-none d-xl-block" style="bottom: 45px; right: 24px;">

            <a class="btn-floating btn-lg red waves-effect waves-light">
                <i class="fas fa-pencil-alt"></i>
            </a>

            <ul class="list-unstyled">
                <li><a class="btn-floating red waves-effect waves-light"><i class="fas fa-star"></i></a></li>
                <li><a class="btn-floating yellow darken-1 waves-effect waves-light"><i class="fas fa-user"></i></a></li>
                <li><a class="btn-floating green waves-effect waves-light"><i class="fas fa-envelope"></i></a></li>
                <li><a class="btn-floating blue waves-effect waves-light"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>

        </div>
        <!-- Fixed button -->

    </header>
    <!-- Main Navigation -->

    <!-- Main layout -->
    <main>

        <div class="container-fluid">

            <!-- Section: Intro -->
            <section class="mt-md-4 pt-md-2 mb-5 pb-4">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">sales</p>
                                    <h4 class="font-weight-bold dark-grey-text">2000$</h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text">Better than last week (25%)</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="fas fa-chart-line warning-color mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">subscriptions</p>
                                    <h4 class="font-weight-bold dark-grey-text">200</h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text">Worse than last week (25%)</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">traffic</p>
                                    <h4 class="font-weight-bold dark-grey-text">20000</h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text">Worse than last week (75%)</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-0">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card">

                            <!-- Card Data -->
                            <div class="admin-up">
                                <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2"></i>
                                <div class="data">
                                    <p class="text-uppercase">organic traffic</p>
                                    <h4 class="font-weight-bold dark-grey-text">2000</h4>
                                </div>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="card-text">Better than last week (25%)</p>
                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Intro -->

            <!-- Section: Main panel -->
            <section class="mb-5">

                <!-- Card -->
                <div class="card card-cascade narrower">

                    <!-- Section: Chart -->
                    <section>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-xl-5 col-lg-12 mr-0 pb-2">

                                <!-- Card image -->
                                <div class="view view-cascade gradient-card-header light-blue lighten-1">
                                    <h2 class="h2-responsive mb-0 font-weight-500">Sales</h2>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade pb-0">

                                    <!-- Panel data -->
                                    <div class="row py-3 pl-4">

                                        <!-- First column -->
                                        <div class="col-md-6">

                                            <!-- Date select -->
                                            <p class="lead"><span class="badge info-color p-2">Data range</span></p>
                                            <div class="select-wrapper mdb-select colorful-select dropdown-info md-form"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-9e3e2d77-9caf-43cb-8038-367e2761bb6d" value=""><ul id="select-options-9e3e2d77-9caf-43cb-8038-367e2761bb6d" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">Choose time period</span></li><li class=" "><span class="filtrable">Today</span></li><li class=" "><span class="filtrable">Yesterday</span></li><li class=" "><span class="filtrable">Last 7 days</span></li><li class=" "><span class="filtrable">Last 30 days</span></li><li class=" "><span class="filtrable">Last week</span></li><li class=" "><span class="filtrable">Last month</span></li></ul><select class="mdb-select colorful-select dropdown-info md-form initialized">
                                                    <option value="" disabled="" selected="">Choose time period</option>
                                                    <option value="1">Today</option>
                                                    <option value="2">Yesterday</option>
                                                    <option value="3">Last 7 days</option>
                                                    <option value="3">Last 30 days</option>
                                                    <option value="3">Last week</option>
                                                    <option value="3">Last month</option>
                                                </select></div>

                                            <!-- Date pickers -->
                                            <p class="lead pt-3 pb-4"><span class="badge info-color p-2">Custom date</span></p>
                                            <div class="md-form">
                                                <input placeholder="Selected date" type="text" id="from" class="form-control datepicker picker__input" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="from_root"><div class="picker" id="from_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__date-display"><div class="picker__weekday-display">Thursday</div><div class="picker__month-display"><div>Jul</div></div><div class="picker__day-display"><div>04</div></div><div class="picker__year-display"><div>2019</div></div></div><select class="picker__select--year" disabled="" aria-controls="from_table" title="Select a year"><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019" selected="">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option></select><select class="picker__select--month" disabled="" aria-controls="from_table" title="Select a month"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="from_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="from_table" title="Next month"> </div></div><table class="picker__table" id="from_table" role="grid" aria-controls="from" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1561827600000" role="gridcell" aria-label="30 June, 2019">30</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1561914000000" role="gridcell" aria-label="1 July, 2019">1</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562000400000" role="gridcell" aria-label="2 July, 2019">2</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562086800000" role="gridcell" aria-label="3 July, 2019">3</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1562173200000" role="gridcell" aria-label="4 July, 2019" aria-activedescendant="true">4</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562259600000" role="gridcell" aria-label="5 July, 2019">5</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562346000000" role="gridcell" aria-label="6 July, 2019">6</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562432400000" role="gridcell" aria-label="7 July, 2019">7</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562518800000" role="gridcell" aria-label="8 July, 2019">8</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562605200000" role="gridcell" aria-label="9 July, 2019">9</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562691600000" role="gridcell" aria-label="10 July, 2019">10</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562778000000" role="gridcell" aria-label="11 July, 2019">11</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562864400000" role="gridcell" aria-label="12 July, 2019">12</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562950800000" role="gridcell" aria-label="13 July, 2019">13</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563037200000" role="gridcell" aria-label="14 July, 2019">14</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563123600000" role="gridcell" aria-label="15 July, 2019">15</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563210000000" role="gridcell" aria-label="16 July, 2019">16</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563296400000" role="gridcell" aria-label="17 July, 2019">17</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563382800000" role="gridcell" aria-label="18 July, 2019">18</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563469200000" role="gridcell" aria-label="19 July, 2019">19</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563555600000" role="gridcell" aria-label="20 July, 2019">20</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563642000000" role="gridcell" aria-label="21 July, 2019">21</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563728400000" role="gridcell" aria-label="22 July, 2019">22</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563814800000" role="gridcell" aria-label="23 July, 2019">23</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563901200000" role="gridcell" aria-label="24 July, 2019">24</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563987600000" role="gridcell" aria-label="25 July, 2019">25</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564074000000" role="gridcell" aria-label="26 July, 2019">26</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564160400000" role="gridcell" aria-label="27 July, 2019">27</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564246800000" role="gridcell" aria-label="28 July, 2019">28</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564333200000" role="gridcell" aria-label="29 July, 2019">29</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564419600000" role="gridcell" aria-label="30 July, 2019">30</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564506000000" role="gridcell" aria-label="31 July, 2019">31</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564592400000" role="gridcell" aria-label="1 August, 2019">1</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564678800000" role="gridcell" aria-label="2 August, 2019">2</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564765200000" role="gridcell" aria-label="3 August, 2019">3</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564851600000" role="gridcell" aria-label="4 August, 2019">4</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564938000000" role="gridcell" aria-label="5 August, 2019">5</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565024400000" role="gridcell" aria-label="6 August, 2019">6</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565110800000" role="gridcell" aria-label="7 August, 2019">7</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565197200000" role="gridcell" aria-label="8 August, 2019">8</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565283600000" role="gridcell" aria-label="9 August, 2019">9</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565370000000" role="gridcell" aria-label="10 August, 2019">10</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1562173200000" disabled="" aria-controls="from">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="from">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="from">Close</button></div></div></div></div></div></div>
                                                <label for="date-picker-example" class="active">From</label>
                                            </div>
                                            <div class="md-form">
                                                <input placeholder="Selected date" type="text" id="to" class="form-control datepicker picker__input" readonly="" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="to_root"><div class="picker" id="to_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__date-display"><div class="picker__weekday-display">Thursday</div><div class="picker__month-display"><div>Jul</div></div><div class="picker__day-display"><div>04</div></div><div class="picker__year-display"><div>2019</div></div></div><select class="picker__select--year" disabled="" aria-controls="to_table" title="Select a year"><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019" selected="">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option></select><select class="picker__select--month" disabled="" aria-controls="to_table" title="Select a month"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="to_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="to_table" title="Next month"> </div></div><table class="picker__table" id="to_table" role="grid" aria-controls="to" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1561827600000" role="gridcell" aria-label="30 June, 2019">30</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1561914000000" role="gridcell" aria-label="1 July, 2019">1</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562000400000" role="gridcell" aria-label="2 July, 2019">2</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562086800000" role="gridcell" aria-label="3 July, 2019">3</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1562173200000" role="gridcell" aria-label="4 July, 2019" aria-activedescendant="true">4</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562259600000" role="gridcell" aria-label="5 July, 2019">5</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562346000000" role="gridcell" aria-label="6 July, 2019">6</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562432400000" role="gridcell" aria-label="7 July, 2019">7</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562518800000" role="gridcell" aria-label="8 July, 2019">8</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562605200000" role="gridcell" aria-label="9 July, 2019">9</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562691600000" role="gridcell" aria-label="10 July, 2019">10</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562778000000" role="gridcell" aria-label="11 July, 2019">11</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562864400000" role="gridcell" aria-label="12 July, 2019">12</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1562950800000" role="gridcell" aria-label="13 July, 2019">13</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563037200000" role="gridcell" aria-label="14 July, 2019">14</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563123600000" role="gridcell" aria-label="15 July, 2019">15</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563210000000" role="gridcell" aria-label="16 July, 2019">16</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563296400000" role="gridcell" aria-label="17 July, 2019">17</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563382800000" role="gridcell" aria-label="18 July, 2019">18</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563469200000" role="gridcell" aria-label="19 July, 2019">19</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563555600000" role="gridcell" aria-label="20 July, 2019">20</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563642000000" role="gridcell" aria-label="21 July, 2019">21</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563728400000" role="gridcell" aria-label="22 July, 2019">22</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563814800000" role="gridcell" aria-label="23 July, 2019">23</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563901200000" role="gridcell" aria-label="24 July, 2019">24</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1563987600000" role="gridcell" aria-label="25 July, 2019">25</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564074000000" role="gridcell" aria-label="26 July, 2019">26</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564160400000" role="gridcell" aria-label="27 July, 2019">27</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564246800000" role="gridcell" aria-label="28 July, 2019">28</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564333200000" role="gridcell" aria-label="29 July, 2019">29</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564419600000" role="gridcell" aria-label="30 July, 2019">30</div></td><td role="presentation" class=""><div class="picker__day picker__day--infocus" data-pick="1564506000000" role="gridcell" aria-label="31 July, 2019">31</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564592400000" role="gridcell" aria-label="1 August, 2019">1</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564678800000" role="gridcell" aria-label="2 August, 2019">2</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564765200000" role="gridcell" aria-label="3 August, 2019">3</div></td></tr><tr><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564851600000" role="gridcell" aria-label="4 August, 2019">4</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1564938000000" role="gridcell" aria-label="5 August, 2019">5</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565024400000" role="gridcell" aria-label="6 August, 2019">6</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565110800000" role="gridcell" aria-label="7 August, 2019">7</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565197200000" role="gridcell" aria-label="8 August, 2019">8</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565283600000" role="gridcell" aria-label="9 August, 2019">9</div></td><td role="presentation" class=""><div class="picker__day picker__day--outfocus" data-pick="1565370000000" role="gridcell" aria-label="10 August, 2019">10</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1562173200000" disabled="" aria-controls="to">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="to">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="to">Close</button></div></div></div></div></div></div>
                                                <label for="date-picker-example" class="active">To</label>
                                            </div>

                                        </div>
                                        <!-- First column -->

                                        <!-- Second column -->
                                        <div class="col-md-6 text-center pl-xl-2 my-md-0 my-3">

                                            <!-- Summary -->
                                            <p class="">Total sales: <strong>2000$</strong>
                                                <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Total sales in the given period"><i class="fas fa-question"></i></button>
                                            </p>
                                            <p class="">Average sales: <strong>100$</strong>
                                                <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average daily sales in the given period"><i class="fas fa-question"></i></button>
                                            </p>

                                            <!-- Change chart -->
                                            <span class="min-chart my-4" id="chart-sales" data-percent="76"><span class="percent">76</span><canvas height="110" width="110"></canvas></span>
                                            <h5>
                                                <span class="badge red accent-2 p-2">Change <i class="fas fa-arrow-circle-up ml-1"></i></span>
                                                <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Percentage change compared to the same period in the past"><i class="fas fa-question"></i>
                                                </button>
                                            </h5>

                                        </div>
                                        <!-- Second column -->

                                    </div>
                                    <!-- Panel data -->

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-xl-7 col-lg-12 mb-4 pb-2">

                                <!-- Chart -->
                                <div class="view view-cascade gradient-card-header blue-gradient"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

                                    <canvas id="lineChart" height="337" width="578" class="chartjs-render-monitor" style="display: block; width: 578px; height: 337px;"></canvas>

                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </section>
                    <!-- Section: Chart -->

                    <!-- Section: Table -->
                    <section>

                        <!-- Top Table UI -->
                        <div class="table-ui p-2 mb-3 mx-4 mb-5">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-xl-3 col-md-6">

                                    <!-- Name -->
                                    <div class="select-wrapper mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-aff637b7-199e-4a62-9aac-943f008396e1" value=""><ul id="select-options-aff637b7-199e-4a62-9aac-943f008396e1" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">Bulk actions</span></li><li class=" "><span class="filtrable">Delate</span></li><li class=" "><span class="filtrable">Export</span></li><li class=" "><span class="filtrable">Change segment</span></li></ul><select class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown initialized">
                                            <option value="" disabled="" selected="">Bulk actions</option>
                                            <option value="1">Delate</option>
                                            <option value="2">Export</option>
                                            <option value="3">Change segment</option>
                                        </select></div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-xl-3 col-md-6">

                                    <!-- Blue select -->
                                    <div class="select-wrapper mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-8415a2aa-0141-4ff1-af93-369f8ac6e6be" value=""><ul id="select-options-8415a2aa-0141-4ff1-af93-369f8ac6e6be" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">Show only</span></li><li class=" "><span class="filtrable">All  (2000)</span></li><li class=" "><span class="filtrable">Never opened  (200)</span></li><li class=" "><span class="filtrable">Opened but unanswered  (1800)</span></li><li class=" "><span class="filtrable">Answered  (200)</span></li><li class=" "><span class="filtrable">Unsunscribed  (50)</span></li></ul><select class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown initialized">
                                            <option value="" disabled="" selected="">Show only</option>
                                            <option value="1">All  (2000)</option>
                                            <option value="2">Never opened  (200)</option>
                                            <option value="3">Opened but unanswered  (1800)</option>
                                            <option value="4">Answered  (200)</option>
                                            <option value="5">Unsunscribed  (50)</option>
                                        </select></div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-xl-3 col-md-6">

                                    <!-- Blue select -->
                                    <div class="select-wrapper mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-2fa130d5-8f4d-4cb2-a81e-c27da54790a5" value=""><ul id="select-options-2fa130d5-8f4d-4cb2-a81e-c27da54790a5" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">Filter segments</span></li><li class=" "><span class="filtrable">Contacts in no segments  (100)</span></li><li class=" "><span class="filtrable">Segment 1  (2000)</span></li><li class=" "><span class="filtrable">Segment 2  (1000)</span></li><li class=" "><span class="filtrable">Segment 3  (4000)</span></li></ul><select class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown initialized">
                                            <option value="" disabled="" selected="">Filter segments</option>
                                            <option value="1">Contacts in no segments  (100)</option>
                                            <option value="1">Segment 1  (2000)</option>
                                            <option value="2">Segment 2  (1000)</option>
                                            <option value="3">Segment 3  (4000)</option>
                                        </select></div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-xl-3 col-md-6">

                                    <form class="form-inline mt-2 ml-2">
                                        <div class="form-group md-form mt-2">
                                            <input class="form-control w-100" type="text" placeholder="Search">
                                        </div>
                                        <button class="btn btn-sm btn-primary ml-2 mr-0 mb-md-0 mb-4 px-2 waves-effect waves-light"><i class="fas fa-search"></i></button>
                                    </form>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </div>
                        <!-- Top Table UI -->

                        <div class="card card-cascade narrower z-depth-0">

                            <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                                <div>
                                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fas fa-th-large mt-0"></i></button>
                                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fas fa-columns mt-0"></i></button>
                                </div>

                                <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html" class="white-text mx-3">Table name</a>

                                <div>
                                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fas fa-pencil-alt mt-0"></i></button>
                                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fas fa-eraser mt-0"></i></button>
                                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fas fa-info-circle mt-0"></i></button>
                                </div>

                            </div>

                            <div class="px-4">

                                <div class="table-responsive">

                                    <!--Table-->
                                    <table class="table table-hover mb-0">

                                        <!-- Table head -->
                                        <thead>
                                        <tr>
                                            <th class="">
                                                <input class="form-check-input" type="checkbox" id="checkbox">
                                                <label for="checkbox" class="form-check-label mr-2 label-table"></label>
                                            </th>
                                            <th class="th-lg"><a>First Name <i class="fas fa-sort ml-1"></i></a></th>
                                            <th class="th-lg"><a>Last Name<i class="fas fa-sort ml-1"></i></a></th>
                                            <th class="th-lg"><a>Username<i class="fas fa-sort ml-1"></i></a></th>
                                            <th class="th-lg"><a>Email<i class="fas fa-sort ml-1"></i></a></th>
                                            <th class="th-lg"><a>Country<i class="fas fa-sort ml-1"></i></a></th>
                                            <th class="th-lg"><a>City<i class="fas fa-sort ml-1"></i></a></th>
                                        </tr>
                                        </thead>
                                        <!-- Table head -->

                                        <!-- Table body -->
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="">
                                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                                <label for="checkbox1" class="label-table"></label>
                                            </th>
                                            <td class="">Mark</td>
                                            <td class="">Otto</td>
                                            <td class="">@mdo</td>
                                            <td class="">markotto@gmail.com</td>
                                            <td class="">USA</td>
                                            <td class="">San Francisco</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <input class="form-check-input" type="checkbox" id="checkbox2">
                                                <label for="checkbox2" class="label-table"></label>
                                            </th>
                                            <td class="">Jacob</td>
                                            <td class="">Thornton</td>
                                            <td class="">@fat</td>
                                            <td class="">jacobt@gmail.com</td>
                                            <td class="">France</td>
                                            <td class="">Paris</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <input class="form-check-input" type="checkbox" id="checkbox3">
                                                <label for="checkbox3" class="label-table"></label>
                                            </th>
                                            <td class="">Larry</td>
                                            <td class="">the Bird</td>
                                            <td class="">@twitter</td>
                                            <td class="">larrybird@gmail.com</td>
                                            <td class="">Germany</td>
                                            <td class="">Berlin</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <input class="form-check-input" type="checkbox" id="checkbox4">
                                                <label for="checkbox4" class="label-table"></label>
                                            </th>
                                            <td class="">Paul</td>
                                            <td class="">Topolski</td>
                                            <td class="">@P_Topolski</td>
                                            <td class="">ptopolski@gmail.com</td>
                                            <td class="">Poland</td>
                                            <td class="">Warsaw</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="">
                                                <input class="form-check-input" type="checkbox" id="checkbox5">
                                                <label for="checkbox5" class="label-table"></label>
                                            </th>
                                            <td class="">Anna</td>
                                            <td class="">Doe</td>
                                            <td class="">@andy</td>
                                            <td class="">annadoe@gmail.com</td>
                                            <td class="">Spain</td>
                                            <td class="">Madrid</td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body -->

                                    </table>
                                    <!-- Table -->

                                </div>

                                <hr class="my-0">

                                <!-- Bottom Table UI -->
                                <div class="d-flex justify-content-between">

                                    <!-- Name -->
                                    <div class="select-wrapper mdb-select colorful-select dropdown-primary md-form hidden-md-down"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-e74f0eab-3db1-4b60-aaf3-acfb0500191e" value=""><ul id="select-options-e74f0eab-3db1-4b60-aaf3-acfb0500191e" class="dropdown-content select-dropdown w-100"><li class="disabled "><span class="filtrable">Rows number</span></li><li class="active"><span class="filtrable">5 rows</span></li><li class=" "><span class="filtrable">25 rows</span></li><li class=" "><span class="filtrable">50 rows</span></li><li class=" "><span class="filtrable">100 rows</span></li></ul><select class="mdb-select colorful-select dropdown-primary md-form hidden-md-down initialized">
                                            <option value="" disabled="">Rows number</option>
                                            <option value="1" selected="">5 rows</option>
                                            <option value="2">25 rows</option>
                                            <option value="3">50 rows</option>
                                            <option value="4">100 rows</option>
                                        </select></div>

                                    <!-- Pagination -->
                                    <nav class="my-4">
                                        <ul class="pagination pagination-circle pg-blue mb-0">

                                            <!--First-->
                                            <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">First</a></li>

                                            <!-- Arrow left -->
                                            <li class="page-item disabled">
                                                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>

                                            <!-- Numbers -->
                                            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                                            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                                            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                                            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                                            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                                            <!-- Arrow right -->
                                            <li class="page-item">
                                                <a class="page-link waves-effect waves-effect" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>

                                            <!-- First -->
                                            <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a></li>

                                        </ul>
                                    </nav>
                                    <!-- Pagination -->

                                </div>
                                <!-- Bottom Table UI -->

                            </div>

                        </div>

                    </section>
                    <!--Section: Table-->

                </div>
                <!-- Card -->

            </section>
            <!-- Section: Main panel -->

            <!-- Section: Cascading panels -->
            <section class="mb-5">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

                        <!-- Panel -->
                        <div class="card">

                            <div class="card-header white-text primary-color">
                                Things to improve
                            </div>

                            <div class="card-body text-center px-4 mb-3">
                                <div class="list-group list-panel">
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i>
                                    </a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac facilisi
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i>
                                    </a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i>
                                    </a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i>
                                    </a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- Panel -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

                        <!-- Panel -->
                        <div class="card">

                            <div class="card-header white-text primary-color">
                                Tasks to do
                            </div>

                            <div class="card-body text-center px-4 mb-3">
                                <div class="list-group list-panel">
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac facilisi
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- Panel -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-0">

                        <!-- Panel -->
                        <div class="card">

                            <div class="card-header white-text primary-color">
                                Statistics
                            </div>

                            <div class="card-body text-center px-4 mb-3">
                                <div class="list-group list-panel">
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac facilisi
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                    <a href="https://mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros
                                        <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to fix"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- Panel -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!--Section: Cascading panels-->

            <!-- Section: Classic admin cards -->
            <section class="pb-3">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <!-- Card Primary -->
                        <div class="card classic-admin-card primary-color">
                            <div class="card-body">
                                <div class="pull-right">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <p class="white-text">SALES</p>
                                <h4 class="">2000$</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <p class="">Better than last week (25%)</p>
                            </div>
                        </div>
                        <!-- Card Primary -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <!-- Card Yellow -->
                        <div class="card classic-admin-card warning-color">
                            <div class="card-body">
                                <div class="pull-right">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <p class="">SUBSCRIPTIONS</p>
                                <h4 class="">200</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <p class="">Worse than last week (25%)</p>
                            </div>
                        </div>
                        <!-- Card Yellow -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

                        <!-- Card Blue -->
                        <div class="card classic-admin-card light-blue lighten-1">
                            <div class="card-body">
                                <div class="pull-right">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <p class="">TRAFFIC</p>
                                <h4 class="">20000</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <p class="">Better than last week (75%)</p>
                            </div>
                        </div>
                        <!-- Card Blue -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-3 col-md-6 mb-0">

                        <!-- Card Red -->
                        <div class="card classic-admin-card red accent-2">
                            <div class="card-body">
                                <div class="pull-right">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <p class="">ORGANIC TRAFFIC</p>
                                <h4 class="">2000</h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="card-body">
                                <p class="">Better than last week (25%)</p>
                            </div>
                        </div>
                        <!-- Card Red -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Classic admin cards -->

        </div>

    </main>
    <!-- Main layout -->

    <!-- Footer -->
    <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
            </div>
        </div>

    </footer>
    <!-- Footer -->

    <div class="drag-target" style="left: 0px;"></div>

@endsection

@section('javascript')

    <!-- Initializations -->
    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

    <!-- Charts -->
    <script>

        // Small chart
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#FF5252",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

        // Main chart
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    fillColor: "#fff",
                    backgroundColor: 'rgba(255, 255, 255, .3)',
                    borderColor: 'rgba(255, 255, 255)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: "#fff",
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                }
            }
        });

        $(function() {
            $('#dark-mode').on('click', function (e) {

                e.preventDefault();

                $('footer, .card').toggleClass('dark-card-admin');
                $('body, .navbar').toggleClass('white-skin navy-blue-skin');
                $(this).toggleClass('white text-dark btn-outline-black');
                $('body').toggleClass('dark-bg-admin');
                $('h6, .card, p, td, th, i, li a, h4, input, label').not('#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
                $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
                $('.gradient-card-header').toggleClass('white black lighten-4');
                $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

            });
        });

    </script>

@endsection