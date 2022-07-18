<!DOCTYPE html>
<html lang="en">

<head>

    <title>Flash Able - Most Trusted Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('cms/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('cms/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('cms/assets/plugins/animation/css/animate.min.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('cms/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        .img-table {
            height: 35px;
            width: auto;
            border-radius: 50%;
        }

        .btn-sm {
            padding-top: 7px;
        }

        .btn-icon {
            padding-top: 7px;
            border-radius: 50%;
        }

        .link-button {
            text-decoration: none;
            font-size: 11pt;
            cursor: pointer;
            font-style: italic;
            color: blue;
            text-align: left;
            transition: 0.3s;
            padding-right: 10px;
        }

        .link-button:hover {
            color: black;
            font-size: 11.5pt;
        }
    </style>
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
        @include('cms.layout.Navbar')
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    @include('cms.layout.Topbar')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            @yield('content')
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('cms/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cms/assets/js/pcoded.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    @yield('js')

</body>

</html>