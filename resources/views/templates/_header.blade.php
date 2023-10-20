<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="tento city" />
    <meta name="description" content="Tenjo City">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>@yield('title')</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c2f938e379.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/tc3-favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/tc3-favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/tc3-favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/tc3-favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/tc3-favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/tc3-favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/tc3-favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/tc3-favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/tc3-favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/tc3-favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/tc3-favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/tc3-favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/tc3-favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/tc3-favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/tc3-favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <header id="header" class="light submenu-dark">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="{{ route('index') }}">
                            <span class="logo-default"><img src="{{ asset('assets/images/logos/logo_paguyuban.png') }}" alt="logo" width="60px"></span>
                            <span class="logo-dark"><img src="{{ asset('assets/images/logos/logo_paguyuban.png') }}" alt="logo" width="60px"></span>
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"> <span class="lines"></span> </a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    @include('templates._nav')
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
