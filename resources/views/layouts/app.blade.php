<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            {{ config('app.name', 'Lily') }}
        </title>
        <!-- Meta Tags for lily -->
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <meta content="Lily" name="description"/>
        <meta content="Lily" name="keywords"/>
        <meta content="Lily" name="author"/>
        <link href="http://www.iconarchive.com/download/i75905/martz90/circle/plex.ico" rel="shortcut icon"/>
        <!-- Meta Tags for lily -->
        <!-- //for-mobile-apps -->
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
        <!-- //for-mobile-apps -->
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/bootstrap-extend.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <!-- Project CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Project CSS -->
        <!-- Project CSS -->
        <link href="{{ asset('css/lily-style.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Project CSS -->
        <!-- Data-table -->
        <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Data-table -->
        <!-- Other Style -->
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/transition-animations.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
        @yield('styles')
        <!-- Other Style -->
        <!-- This styles needs for demo -->
        <link href="{{ asset('preview/lmpixels-demo-panel.css') }}" rel="stylesheet" type="text/css"/>
        <!-- /This styles needs for demo -->
        <!-- Jquery -->
        <script src="{{ asset('js/jquery.min.js') }}">
        </script>
        <script src="{{ asset('js/app.js') }}">
        </script>
        <!-- Jquery -->
        <!-- Style JS -->
        <script src="{{ asset('js/modernizr.custom.js') }}">
        </script>
        <!-- Style JS -->
    </head>
    <body class="material-template">
        <!-- Loading animation -->
        <div class="preloader">
            <div class="preloader-animation">
                <div class="preloader-spinner">
                </div>
            </div>
        </div>
        <!-- /Loading animation -->
        <div class="page" id="page">
            <!-- Header -->
            <header class="header mobile-menu-hide" id="site_header">
                <div class="header-content">
                    <div class="site-title-block mobile-hidden">
                        <div class="site-title">
                            <span>
                                Lily
                            </span>
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="site-nav">
                        <!-- Main menu -->
                        <ul class="site-main-menu" id="nav">
                            <li>
                                {{ link_to_route('home.index', 'My Lily', null, array('class'=>'pt-trigger','title'=>'My Lily')) }}
                            </li>
                            <li>
                                {{ link_to_route('team.index', 'Team', null, array('class'=>'pt-trigger','title'=>'Team')) }}
                            </li>
                            <li>
                                {{ link_to_route('report.index', 'Report', null, array('class'=>'pt-trigger','title'=>'Report')) }}
                            </li>
                            <li>
                                {{ link_to_route('admin.index', 'Admin', null, array('class'=>'pt-trigger','title'=>'Admin')) }}
                            </li>
                            <style>
                            </style>
                            <li class="dropdown">
                                <a class="dropdown-toggle pt-trigger" data-toggle="dropdown" href="#">
                                    {{ Auth::user()->name }}
                                    <b class="caret">
                                    </b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        {{ link_to_route('settings.index', 'Profile Settings', null, array('class'=>'dropdown-style','title'=>'Profile Settings')) }}
                                    </li>
                                    @auth
                                    <li>
                                        {{ link_to_route('logout', 'Logout', null, array('class'=>'dropdown-style','title'=>'Logout')) }}
                                    </li>
                                    @endauth
                                </ul>
                            </li>
                        </ul>
                        <!-- /Main menu -->
                    </div>
                    <!-- Navigation -->
                </div>
            </header>
            <!-- /Header -->
            <!-- Mobile Header -->
            <div class="mobile-header mobile-visible">
                <div class="mobile-logo-container">
                    <div class="mobile-site-title">
                        {{ Auth::user()->name }}
                    </div>
                </div>
                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars">
                    </i>
                </a>
            </div>
            <!-- /Mobile Header -->
            <!-- Main Content -->
            <div class="site-main" id="main">
                <!-- Page changer wrapper -->
                <div class="pt-wrapper">
                    <!-- Subpages -->
                    <div class="subpages">
                        {{-- @yield('profile') --}}
                        @hasSection ('profile')
                        @yield('profile')
                        @else
                        <!-- Main Layout Subpage -->
                        <section class="pt-page" data-id="home">
                            <div class="section-inner custom-page-content">
                                <div class="page-header color-1">
                                    <h2>
                                        @yield('header-name')
                                    </h2>
                                </div>
                                <div class="page-content">
                                    <!-- My Services -->
                                    @yield('content')
                                    <!-- End of My Services -->
                                </div>
                            </div>
                        </section>
                        <!-- End of Main Layout Subpage -->
                        @endif
                    </div>
                </div>
                <!-- /Page changer wrapper -->
            </div>
            <!-- /Main Content -->
        </div>
        <footer>
            <div class="copyrights">
                © 2019 All rights reserved. Lily
            </div>
        </footer>
        <!-- Demo Color changer -->
        {{--
        <a class="lm-demo-panel-switcher right" id="lm_demo_panel_switcher">
            <i class="fa fa-gear">
            </i>
        </a>
        <div class="lm-demo-panel right panel-color-red active" id="lm_demo_panel">
            <div class="demo-panel-title">
                Main Color
            </div>
            <div class="demo-panel-options" id="main_color">
                <a data-id="deep-purple">
                    <div class="preview color-1">
                    </div>
                </a>
                <a data-id="red">
                    <div class="preview color-2">
                    </div>
                </a>
                <a data-id="blue">
                    <div class="preview color-3">
                    </div>
                </a>
                <a data-id="deep-orange">
                    <div class="preview color-4">
                    </div>
                </a>
                <a class="current-main-color" data-id="green">
                    <div class="preview color-5">
                    </div>
                </a>
                <a data-id="light-blue">
                    <div class="preview color-6">
                    </div>
                </a>
                <a data-id="pink">
                    <div class="preview color-7">
                    </div>
                </a>
                <a data-id="purple">
                    <div class="preview color-8">
                    </div>
                </a>
                <a data-id="orange">
                    <div class="preview color-9">
                    </div>
                </a>
                <a data-id="amber">
                    <div class="preview color-10">
                    </div>
                </a>
                <a data-id="lime">
                    <div class="preview color-11">
                    </div>
                </a>
                <a data-id="teal">
                    <div class="preview color-12">
                    </div>
                </a>
            </div>
            <div class="demo-button-block">
                <a class="btn btn-primary btn-demo" href="https://themeforest.net/item/pro-card-material-cv-resume-vcard-template/20111046" target="_blank">
                    Buy Now
                </a>
            </div>
        </div>
        --}}
        <!-- /Demo Color changer -->
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/pages-switcher.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/validator.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/jquery.shuffle.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/masonry.pkgd.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/jquery.hoverdir.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/main.js') }}" type="text/javascript">
        </script>
        @yield('scripts')
        <!-- Demo Color changer Script -->
        {{--
        <script src="{{ asset('preview/lmpixels-demo-panel.js') }}">
        </script>
        --}}
        <!-- /Demo Color changer Script -->
    </body>
</html>