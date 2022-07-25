<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('cms/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('cms/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('cms/assets/plugins/animation/css/animate.min.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('cms/assets/css/style.css') }}">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <form action="{{ route('register.process') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            {{-- <img src="../assets/images/logo-dark.png" alt="" class="img-fluid mb-4"> --}}
                            <h4 class="mb-3 f-w-400">Register Untuk Masuk Ke Akun</h4>
                            @if (session('status'))
                                <small class="text-success">{{ session('status') }}</small>
                            @endif
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <small class="text-danger">{{ $error }}</small>
                                @endforeach
                            @endif
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                                </div>
                                <input name="nama" type="text" class="form-control" placeholder="Nama lengkap">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                </div>
                                <input name="email" type="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="row mt-4">
                                <div class="input-group mb-2 col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="input-group mb-2 col">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-check"></i></span>
                                    </div>
                                    <input name="password_confirmation" type="password" class="form-control"
                                        placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">Register</button>
                            <a href="{{ config('app.url') }}/auth/login" class="btn btn-light mb-4">Login?</a>
                            <p class="mb-2 text-muted">Lupa Password? <span>Hub: Admin</span></p>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="{{ asset('cms/assets/images/auth-bg.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('cms/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('cms/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
