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
    <title>Admin Login</title>

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
    <!-- Bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <section class="pt-5 pb-5">
            <div class="container-fluid d-flex flex-column">
                <div class="row align-items-center min-vh-100">
                    <div class="col-md-6 col-lg-6 col-xl-4 mx-auto">
                        <div class="card">
                            <div class="card-body px-sm-4 py-5">
                                <div class="mb-2 text-center">
                                    <img src="{{ asset('assets/images/logos/logo_paguyuban.png') }}" alt="tenjo city" width="100px">
                                </div>
                                <span class="clearfix"></span>
                                <hr>
                                <form class="form-validate" method="POST" action="/login">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control @error('email')
                                            is-invalid
                                            @enderror" name="email" placeholder="Enter your email" autofocus required value="{{ old('email') }}">
                                            <span class="input-group-text"><i class="icon-mail"></i></span>
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="input-group show-hide-password">
                                            <input class="form-control" name="password" placeholder="Enter password" type="password" required>
                                            <span class="input-group-text"><i class="icon-lock" aria-hidden="true" style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>
                                    <div class="mt-4"><button type="submit" class="btn btn-primary btn-block btn-primary">Login</button>
                                    </div>
                                    <div class="mt-2"><a href="{{ route('index') }}" class="btn btn-block btn-danger text-center">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!--Plugins-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!--Template functions-->
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>