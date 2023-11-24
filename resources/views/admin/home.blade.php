@section('title')
Dashboard
@endsection
@extends('templates.admin')
@section('content')
<section id="page-content" class="no-sidebar">
    <div class="container">
        @if (session('success'))
        <div role="alert" class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            <strong><i class="fa fa-info-circle"></i> {{ session('success') }}</strong>
        </div>
        @endif
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="{{ asset('assets/images/logos/logo_paguyuban.png') }}" alt="logo" width="300">
            </div>
        </div>
    </div>
    <!--END: Extra width pie chart-->
</section>
@endsection
