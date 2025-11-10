<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Admin Dashboard</title>

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/morris/morris.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/theme.css') }}" />

    <!-- Theme Layout -->
    <link rel="stylesheet" href="{{ asset('backend/css/layouts/modern.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('backend/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        @include('admin.body.header')
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('admin.body.sidebar')
            <!-- end: sidebar -->

            @yield('admin')
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close d-md-none">
                        Collapse <i class="fas fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2023-04-19T00:00+00:00">04/19/2023</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

    </section>

    <!-- Vendor -->
    <script src="{{ asset('backend/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('bakcend/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('backend/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('backend/vendor/common/common.js') }}"></script>
    <script src="{{ asset('backend/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('backend/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('backend/vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('backend/vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('backend/vendor/raphael/raphael.js') }}"></script>
    <script src="{{ asset('backend/vendor/morris/morris.js') }}"></script>
    <script src="{{ asset('backend/vendor/gauge/gauge.js') }}"></script>
    <script src="{{ asset('backend/vendor/snap.svg/snap.svg.js') }}"></script>
    <script src="vendor/liquid-meter/liquid.meter.js"></script>
    <script src="{{ asset('backend/vendor/jqvmap/jquery.vmap.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('backend/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('backend/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('backend/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('backend/js/examples/examples.dashboard.js') }}"></script>

</body>

</html>
