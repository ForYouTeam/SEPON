<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{config('app.name')}}</title>
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
    <link rel="stylesheet" href="{{ asset('cms/assets/css/yearpicker.css') }}">
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

        .form-filter {
            background: none;
            height: 40px !important;
            font-size: 11pt;
        }

        .img-profile {
            height: 50px;
            width: auto;
        }

        .img-profile-big {
            height: 250px;
            width: auto;
        }

        .step-icon {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 1fr;
            grid-column-gap: 25px;
            grid-row-gap: 0px;
        }

        .mt-min-2 {
            margin-top: -12px;
        }

        .mt-min-4 {
            margin-top: -18px;
        }

        .empity-data {
            text-align: center;
        }

        @media (min-width: 768px) {
            .form-regist {
                padding: 5% 15% 10%;
            }

            .step-icon {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: 1fr;
                grid-column-gap: 50px;
                grid-row-gap: 0px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.23/dist/sweetalert2.css"
        integrity="sha256-nXeHln6Yx1boZLM6tS50KaqgXPNsEgmHmmfXsq0bdD8=" crossorigin="anonymous">
</head>

<body class="">

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
        @include('cms.layout.Navbar')
    </nav>

    @include('cms.layout.Topbar')

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalUniv">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form id="form-update" style="padding: 10px 25px;">
                        @csrf
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-update">Kirim</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ asset('cms/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('cms/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cms/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('cms/assets/js/yearpicker.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.23/dist/sweetalert2.js"
        integrity="sha256-KCfGmXy9AXUQznmwX+3HaRQquw99U21swIiv67k9XEw=" crossorigin="anonymous"></script>

    @yield('js')

</body>

</html>
