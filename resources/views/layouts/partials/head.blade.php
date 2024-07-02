<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Horizontal Layout | Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">


    <!-- plugin css -->
    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/twitter-bootstrap-wizard/prettify.css') }}">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css" type="text/css') }}" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- toatst Css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- alertifyjs default themes  Css -->
    <link href="{{asset('assets/libs/alertifyjs/build/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body data-layout="horizontal">
