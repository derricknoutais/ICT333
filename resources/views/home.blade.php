<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('PurpleAdmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('PurpleAdmin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('PurpleAdmin/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('PurpleAdmin/images/favicon.png')}}" />
    <style>
        .card.card-img-holder {
            position: relative;
            height: 20em;
        }
        .menu-item {
            width:100%
        }
        .menu-item:hover {
            text-decoration: none;

        }
        .hover:hover{
            transform: scale(1.01);
            z-index: 2;

        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <div class="row text-center mt-3">
                <div class="col-md-3">
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="http://www.perthgamesfestival.com.au/wp-content/uploads/2016/09/1_Murdoch-01.png" alt="logo" class="w-25"/>
                    </a>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">Workload Management System</h1>
                </div>
                <div class="col-md-3">
                    
                </div>
                
            
        </div>

        <div class="row" style="margin-top:10em">
            <div class="col-md-3 stretch-card grid-margin offset-md-3 hover">
                <a href="/uploader" class="menu-item">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body text-center">
                        <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3"></h4>
                        <h2 class="mb-5 text-center">Input</h2>
                        <h6 class="card-text"><i class="mdi mdi-upload mdi-24px"></i></h6>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3  stretch-card grid-margin hover">
                <a href="/pattern-builder" class="menu-item">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body text-center">
                            <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3"></h4>
                            <h2 class="mb-5 text-center">Pattern Builder</h2>
                            <h6 class="card-text"><i class="mdi mdi-creation mdi-24px"></i></h6>
                        </div>
                    </div>
                </a>    
            </div>
            <div class="col-md-3 stretch-card grid-margin offset-md-3 hover">
                <a href="/workload-allocator" class="menu-item">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body text-center">
                            <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3"></h4>
                            <h2 class="mb-5 text-center">Workload Allocator</h2>
                            <h6 class="card-text"><i class="mdi mdi-diamond mdi-24px"></i></h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 stretch-card grid-margin hover">
                <a href="/visualizer" class="menu-item">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body text-center">
                            <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3"></h4>
                            <h2 class="mb-5 text-center">Visualizer</h2>
                            <h6 class="card-text"><i class="mdi mdi-chart-line mdi-24px"></i></h6>
                            
                        </div>
                    </div>
                </a>
            </div>           
        </div>
        
        <!-- partial -->
        

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

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