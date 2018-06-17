<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
    <title>Murdoch Workload Manager</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('PurpleAdmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('PurpleAdmin/vendors/css/vendor.bundle.base.css')}}"> --}}
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('PurpleAdmin/css/style2.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('PurpleAdmin/css/app.css')}}"> --}}
    <!-- endinject -->
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/700552034311753728/fq2jJ1Dz_400x400.png" />
</head>

<body>
    <div class="container-scroller" id="app">


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- Sidebar -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- Profile Picture -->
                    <li class="nav-item">
                        <a class="navbar-brand brand-logo" href="/">
                            <img src="http://www.perthgamesfestival.com.au/wp-content/uploads/2016/09/1_Murdoch-01.png" alt="logo" class="w-100"/>
                        </a>
                    </li>
                    
                    <!-- Sidebar Items (Visualizer, Uploader, Pattern Builder, Workload Allocator) -->
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="/visualizer">
                            <span class="menu-title">Visualizer</span>
                            {{-- <i class="mdi mdi-home menu-icon"></i> --}}
                            <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="/pattern-builder">
                            <span class="menu-title">Pattern Builder</span>
                            <i class="mdi mdi-creation menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/workload-allocator">
                            <span class="menu-title">Workload Allocator</span>
                            <i class="mdi mdi-share-variant menu-icon"></i>
                        </a>
                    </li>

                    <!-- Data -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" role="button" aria-expanded="false" aria-controls="ui-basic">
                            <span class="menu-title">Data</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-database menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/data/staff">
                                        <span class="menu-title">Staff</span>
                                        <i class="mdi mdi-worker menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/data/units">
                                        <span class="menu-title">Units</span>
                                        <i class="mdi mdi-numeric-1-box menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/data/offerings">
                                        <span class="menu-title">Offerings</span>
                                        <i class="mdi mdi-human-handsdown menu-icon"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/data/patterns">
                                        <span class="menu-title">Patterns</span>
                                        <i class="mdi mdi-lock-pattern menu-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>   
                </ul>
            </nav>

            <!-- Main Panel -->
            <div class="main-panel">

                @yield('content')

                @include('partials.footer')

            </div>
        </div>

    </div>

    <script src="{{asset('js/app.js')}}"></script>
    {{-- <script src="{{asset('PurpleAdmin/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('PurpleAdmin/vendors/js/vendor.bundle.addons.js')}}"></script> --}}
    <script src="{{asset('PurpleAdmin/js/off-canvas.js')}}"></script>
    <script src="{{asset('PurpleAdmin/js/misc.js')}}"></script>
    <script src="{{asset('PurpleAdmin/js/dashboard.js')}}"></script>
    <script src="{{asset('PurpleAdmin/js/chart.js')}}"></script>

    @yield('script')

</body>

</html>