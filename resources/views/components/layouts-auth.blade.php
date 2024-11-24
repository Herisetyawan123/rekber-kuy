<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Auth | Negoin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->

        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/icon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/icon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/icon/favicon-16x16.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/images/icon/android-chrome-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{asset('assets/images/icon/android-chrome-512x512.png')}}">
        <link rel="manifest" href="{{asset('assets/images/icon/site.webmanifest')}}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        @keyframes bg-slide {
                0%, 24% {
                    background-image: url('/assets/images/bg/bg1.jpg');
                    opacity: 1;
                }
                24%, 44% {
                    background-image: url('/assets/images/bg/bg2.jpg');
                    opacity: 1;
                }
                44%, 68% {
                    background-image: url('/assets/images/bg/bg3.jpg');
                    opacity: 1;
                }
                68%, 92% {
                    background-image: url('/assets/images/bg/bg4.jpg');
                    opacity: 1;
                }
                92%, 100% {
                    background-image: url('/assets/images/bg/bg1.jpg');
                    opacity: 1;
                }
            }

        .auth-bg {
            animation: bg-slide 20s infinite;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 0;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(28, 34, 145, 0.65) !important;
            z-index: 1;
        }
        @media (max-width: 770px) {
        .wrapper-auth {
            width: 100%; /* Atur lebar dropdown menjadi penuh */
        }
    }
        </style>

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    {{-- <div class="col-xxl-3 col-lg-4 col-md-5">

                        {{$slot}}

                        <!-- end auth full page content -->
                    </div> --}}
                    <!-- end col -->
                    <div class="col-xxl-12 col-lg-12 col-md-12">
                        <div class="wrapper-auth" style="position: absolute; z-index: 4; background-color: #fff; left: 50%; transform: translateX(-50%); min-width: 40px;">

                            {{$slot}}

                        </div>
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles" style="z-index: 2;">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{asset('assets/libs/pace-js/pace.min.js')}}"></script>

        <!-- validation init -->
        <script src="{{asset('assets/js/pages/validation.init.js')}}"></script>

    </body>

</html>
