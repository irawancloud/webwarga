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

    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document title -->
    <title>@yield('title')</title>
    <!-- DataTables css -->
    <link href='{{ asset('assets/plugins/datatables/datatables.min.css') }}' rel='stylesheet' />
    <!-- Stylesheets & Fonts -->
    {{-- <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <!-- Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

</head>


<body>
    <!-- Body Inner -->
    <div class="body-inner">
        @include('templates._header_admin')
        <!-- Page Content -->
        @yield('content')

        <!-- end: Page Content -->
        <footer id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; {{ date('Y') }} <a href="http://www.wargatcr3.or.id" target="_blank" rel="noopener"> Tenjo City Residence 3</a> </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>


    <!--Plugins-->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!--Template functions-->
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    <!--Datatables plugin files-->
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                buttons: [{
                    extend: 'print',
                    title: 'Export Daftar Artikel',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'pdf',
                    title: 'Export Daftar Artikel',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'excel',
                    title: 'Export Daftar Artikel',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'csv',
                    title: 'Export Daftar Artikel',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'copy',
                    title: 'Export Daftar Artikel',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }]
            });
            table.buttons().container().appendTo('#export_buttons');
            $("#export_buttons .btn").removeClass('btn-secondary').addClass('btn-light');
        });
    </script>
    <!-- ck editor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
   
</body>

</html>
