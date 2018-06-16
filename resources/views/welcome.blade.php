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
    <link rel="stylesheet" href="{{asset('PurpleAdmin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('PurpleAdmin/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('PurpleAdmin/css/app.css')}}"> --}}
    <!-- endinject -->
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/700552034311753728/fq2jJ1Dz_400x400.png" />
</head>

<body>
    <div class="container-scroller" id="app">

        <!-- partial:partials/_navbar.html -->
        {{-- <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="/">
                    <img src="http://www.perthgamesfestival.com.au/wp-content/uploads/2016/09/1_Murdoch-01.png" alt="logo"/>
                </a>
            </div>
            
        </nav> --}}

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
                    <li class="nav-item">
                        <a class="nav-link" href="/uploader">
                            <span class="menu-title">Data</span>
                            <i class="mdi mdi-upload menu-icon"></i>
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
                                    <a class="nav-link" href="/teaching-patterns">
                                        <span class="menu-title">Teaching Patterns</span>
                                        <i class="mdi mdi-lock-pattern menu-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>   
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">

                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="{{asset('js/app.js')}}"></script>
    <!-- plugins:js -->
    <script src="{{asset('PurpleAdmin/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('PurpleAdmin/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('PurpleAdmin/js/off-canvas.js')}}"></script>
    <script src="{{asset('PurpleAdmin/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('PurpleAdmin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->

    @yield('script')

</body>

</html>