<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Education | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('web/assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <!-- Left Social -->
                    <div class="header-left-social">
                        <ul class="header-social">
                            <li><a href="#"><i class="fas fa-user"></i></a></li>
                            <li><a href="#"><i class="fab fa-leanpub"></i></a></li>
                            <li><a href="#"><i class="fas fa-chart-line"></i></a></li>
                            <li> <a href="#"><i class="fas fa-graduation-cap"></i></a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>{{ $data['profile'] ? $data['profile']->telepon : 'Data kosong'}}</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul>
                                        <li><a href="{{route('login')}}"><i class="ti-user"></i>Login</a></li>
                                        <li><a href="{{route('auth.register')}}"><i class="ti-lock"></i>Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="#"><img src="{{ asset('web/assets/img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="#"><img src="{{ asset('web/assets/img/logo/logo.png') }}"
                                        alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#fasilitas">Fasilitas</a></li>
                                        <li><a href="#guru">Guru</a></li>
                                        <li><a href="#tentang">Tentang</a></li>
                                        <li><a href="#galeri">Galeri</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-search d-none d-lg-block">
                                <h5>{{$data['profile'] ? $data['profile']->nama_sekolah : 'Sekolah Dasar Negeri 3 Palu'}}</h5>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".2s">Sekolah Terpadu</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Jadikan Anak Anda Menjadi Pilihan Bangsa Bersama Kami!</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="{{route('auth.register')}}" class="btn hero-btn" data-animation="fadeInLeft"
                                            data-delay=".8s">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="hero-man d-none d-lg-block f-right" data-animation="jello"
                                    data-delay=".4s">
                                    <img src="{{ asset('web/assets/img/hero/heroman.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div id="fasilitas" class="categories-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Fasilitas Sekolah</span>
                            <h2>Guna mendukung belajar mengajar</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (count($data['fasilitas']) >= 1)
                        @foreach ($data['fasilitas'] as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-web-design"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">{{$d->nama_ruangan}}</a></h5>
                                    <p>{{$d->deskripsi}}.</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 text-center">
                            <h4 class="text-danger">Data Saat Ini Kosong <i class="fas fa-exclamation"></i></h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
        <!--? Count Down Start -->
        <div class="count-down-area pt-90 pb-60 section-bg"
            data-background="{{ asset('web/assets/img/gallery/section_bg01.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="69px">
                                            <image x="0px" y="0px" width="72px" height="69px"
                                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAMAAADerVCrAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB11BMVEUXmnP///8XmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnP///8qvp8aAAAAm3RSTlMAAFDr4uMPOMDMwtJjMzzHMMguXAUTrvgdzuXda/4UIr+7NTa2pVX1F7iKibnzFUFEvYcv8j7xn9+ewYPkQvARLeoCLMOAc3KBRdaFhoRW+u5XA/wIOWTaeA4rk69LHJyLKdH2qeyiqgwYs6Cn3Foktw1MbwlYaZk0lNmCEkftSRDUGVsHJaiyuhoKd+jnrfQb4Uislgt118pnASfW+mcAAAABYktHRAH/Ai3eAAAAB3RJTUUH5AUFDBg2+oR40gAAAoxJREFUWMPtmOlfEkEYxycxAQVCFJUVSMpVCBBRFMmENMxCUFO7Lc3yyg47zG677/uu3z/bLtfu+pl9sQu86BO/F+wzv332y87D7MwOhGRUoYEqaSqIVJXqOMD2LSCgiqhQFVBKkFanVySdVgZUrbQ+1TKgGhiMCmRAjSzIpKQ+pjKoDCopaAfMSkBm1MqALHVKOITUWUo9jRQNVG9VRrHWy4AaGpuUcJoaG/6ZcVQGlUHFANnANCsQA5sMyO5QtvQ77HLTiHOnIjlLPB+1uFSoZStol9pXSGC3BNQKtk2VWLSKOVq0u9WUiBB3O7Sipgd71HEI8cInNEzwd9CSnIFOkQJOWk6HX/Q8BNFFy+kOScsaMtOyuhDMhT3opS5EYfSJ34b7EKFlWXvRkw33op/afQZGcdOIfdS0fugywQCiMVrCfgwOidtDgzhAy4tFMZAO4himftNBsFKDxQg18RDi/OEwkKDuEDRgpAYDDTUxAXRyoFH1T4egZPrnCyvZONAUTg+fFLykQHmR4j7HMD5RoMZxhANNRqYKrdBUZDJ9Z9OxAjVdaG0k2lYklUH/NwiIHJUMrGO13KA/fuKk2Dt1OsqZM2ckiW0+zqtMns2MRTIbB+aEs+fmcX4mfIHBQkAwRwAbu+gClpbz3ooHuLh66TJwhWS7dnUNvmvZ09eBGzf5YN2BW7lrNjB/mz+67+BubrfSPYF79/ngwQKS+RqN4uEmbz4aRii3cKw8xsYTPjDrhWXIADzlj8/sQO6vrOU1eJ5nQWQdaH6x+hJ49Tp/729YILjI6oG3QidN7/B+KfzhIxKiBWUOiM9mQORT6jNXOdeYpJpfvnKe/5tF7H3/8ZMzf/3+Iza1EeAvtr05pHWuTqcAAAAASUVORK5CYII=" />
                                        </svg>
                                        <span class="counter color-green">1050</span>
                                        <p class="color-green">+ Fasilitas</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="79px">
                                            <image x="0px" y="0px" width="72px" height="79px"
                                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABPCAMAAAB/NnPNAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACo1BMVEX///8tMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJL///9r5VNNAAAA33RSTlMAACpgeYRyURmH3McEAnb16q6Shb3VOg23sT8DDGLb+2kKSQmYD6PjJGv+72dOLlDAfNdwXvxI4QaRsJ5/GzXxFwdcbfAeFflCdPIvuHum/ZUcZovQWLwllhYrq/qAFFaGmWX09zaX5KETzczuLZt6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" />
                                        </svg>
                                        <span class="counter color-blue">1050</span>
                                        <p class="color-blue">+ Total Lulusan</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="71px">
                                            <image x="0px" y="0px" width="72px" height="71px"
                                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABHCAMAAACTZfGgAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACvlBMVEX///8tmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhf////Z9I0RAAAA6HRSTlMAALv77U7Cw9xSvDlMUGXKT1MeBO5aEf3YVB/vqSMCAxI4Lof3EMfXuqcKVoNFLGjIUQ8NXXBsZMyWGqYVKi2EDkFtAS86NjNA8x3njJoUQ18IoGvkzWmkcmNg36uvwLRKF/6bJbnGfRvpsPWtZ4shdOwMNPQJxDH5Sc6Bar+jwSLL1tOyJpN30fwLtzwyWBiXgHqClTtX8jVEQhzUeFwpE52KtVvqlHF2IBaz8cXwKDfgYX7biIXJpTDdBtIH2Yn45q5I3nt8Sz2xeXPjz5j64Z7aK1Xihpz2n+Wiqrgkb5lHGai96Kx1fW7M+gAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBQUMHhhwCNKbAAAEtklEQVRYw+2Y+1dUVRTHOYSAolgwiAQCQgiITigakAQiMChkIK8B8hEkSAQU6PhCI95vzCwVhDQFo0yzDALzUWlKb+mhmVr2/v4ZnXPnDjOXmXPvlKxWq+X3h9l7zrrnc89j7zP7jI2NKNt7ICe7ScSibMwE2DtwZe8ITLYWNIXIyIkOaqqVIHs50DQ4T8e91oEc5ED3wcVVZWl2fx/kRma4W5idBdBMeZAHIfd7ms/OHDTTSxFEZpnPzhxk1tfbx1sv1zEQ8TWbnTlotp/0CX9jMD4QQDzgpG+eM252FtYoUApyC7IVFRQ8l4Rg3nwm9YOgyy4PCpVbowWm6bLwDrY/bNHih/QKj4DLHYBMFImHJwa05L8KinrEGlB0zFIFUKw7VMvi+KD4BI1Gk7h8BZIUQMl4lB6pKx/jgFIMoZIq7PkqqcKMoHikEe/0DGRyQFnQZufkPo7V1PczP7jXjIEiEMX8teCAcuGx7om8fDxJ/fUFhfZSFW7Qg4qILyKF0ame4oBSMbkYcH+6RHbXkkgpyp6h7rNw44IS6KjV5Q6yoAqSQedZsJG4byLcqS0nREewmfpbtkoXaNEYiCRgw7YSYDsqeaAdcNxZ/FyV4D9fXRNoVE1tihFUB2rrG4B6HmhLhvByz0aZqQWjHk2C11zND0ifChovuha5FNHmt6KNOWVoV0yRjsxdXNALEAfkCX6u6RbPq9xd+eIegA96CdjB7Mto4IP2iju0j6X2/s5Yibo6XUTQAWa7MYMPckbPKwcP1eJV6mvMU6SaAQ5Dy4waRwgflIvevqO5oBlJyKHSxtckyu6fz7q24nVm3qjSyIBS0RUOZHoek9k1vGn6jQtqIzHHyYlCFglvnWxvT2yvGMdxQzYzvW/7yoHeQYcPe2kV/TipX5dT40AqxDHzrrDUXFC4uKoMtLRnYHDQ3z9aymnDoLBCQjryQUVex0PnhL63zoMf18hjZgjDsiBF6XCamffF4P7noAF2zhAyCTnyoKTizNozZ7qn7OVwziJZsOcQIA9yFhebVbgBp84flup8ShiaI2jlvl8IffntF0o70+03lRf5QAV8uOAj/YrLBuSFMVDcrEQ/qdoX6vJXtgz0AReVI1s/orXcTasTbgEpSqBcfakoRFvUso/7TXQpnZYD3mglXX1bLxMlkDMutY2MjGAnsXCMsF8yaGmzhiiCQsQ+n7BnhjtHTNSpZm0X7YBmV2XQqqxPG/v7Gz+LJhx9js1HJqTQqvqCBvdEgOgRsvpfqyGDrAR9qQT6SjtkjbQqhYI9sxlW6kqALOiu7ur/JWDUyeQrLSRCaRp83SO5sH3TcILdaS5LsvfbAtr23dUDYs9rDkCZEXSwCd+vue71A8pjjV2yaZU/dMMWuGmslnbdAo6lBTvCeB/5sRUFYaI/FfhJx57ryEeWoc9tNG1kNu8ozhkuhPEq7GGlls3P5bg6NoxB2G1jNmA39iUa3tiN278wZzgCowZkDtDL7Nl0YJqY/RWtuLXeQOoATv+aVgcEGQ+tuUPAbzeGIgCTC0Xb70i+eb1kE2rUxmOkDHC4JpKKYq7QlbMNkfxpc+EP2rYiUvLvS8ufgbRxemmc6Xk0exT4C5sHAOBlXXP3AAAAAElFTkSuQmCC" />
                                        </svg>
                                        <span class="counter color-green">1050</span>
                                        <p class="color-green">+ Guru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Count Down End -->
        <!--? Team Ara Start -->
        <div id="guru" class="team-area pt-160 pb-160 section-bg"
            data-background="{{ asset('web/assets/img/gallery/section_bg02.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <span>Tentang Sekolah Kami</span>
                            <h2>Guru Terbaik Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (count($data['guru']) >= 1)
                        @foreach ($data['guru'] as $d)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-team mb-30">
                                    <div class="team-img">
                                        <img src="{{ asset($d->path_img) }}" alt="" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="team-caption">
                                        <h3>{{ $d->nama }}</h3>
                                        <p>{{ $d->jabatan }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 text-center">
                            <h4 class="text-light">Data Saat Ini Kosong <i class="fas fa-exclamation"></i></h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? About Law Start-->
        <div id="tentang" class="about-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Tentang Sekolah Kami</span>
                                <h2>Profile Sekolah</h2>
                            </div>
                            <p>Sebagaimana yang tercantum dalam Undang-Undang UU Nomor 20 Tahun 2003 pada Bab II
                                Pasal 3
                                bahwa Pendidikan Nasional bertujuan untuk berkembangnya potensi peserta didik agar
                                menjadi manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak
                                mulia,
                                sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis
                                serta
                                bertanggung jawab.</p>
                            @if ($data['profile'])
                                <ul>
                                    <li><span class="flaticon-business"></span>
                                        {{ $data['profile']->alamat }}, Desa.{{ $data['profile']->desa }}, Kec.{{ $data['profile']->kecamatan }}.
                                        Prov.{{ $data['profile']->provinsi }}
                                    </li>
                                    <li><span class="flaticon-communications-1"></span>{{ $data['profile']->telepon }} </li>
                                    <li><span class="flaticon-graduated"></span>{{ $data['profile']->status_sekolah }}</li>
                                </ul>
                            @else
                                <div class="col-lg-12 text-center">
                                    <ul class="text-light">Data Saat Ini Kosong <i class="fas fa-exclamation"></i></ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="{{ asset('img/2.jpeg') }}" alt="" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->
        <!--? Testimonial Start -->
        @if ($data['profile'])
        <div class="testimonial-area fix pt-180 pb-180 section-bg"
            data-background="{{ asset('web/assets/img/gallery/section_bg03.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{ asset('web/assets/img/gallery/visi.png') }}"
                                        class="ani-btn " alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p class="text-justify">{{ $data['profile']->visi }}</p>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{ asset('web/assets/img/gallery/misi.png') }}"
                                        class="ani-btn " alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p class="text-justify">{{ $data['profile']->misi }} </p>
                                    <!-- Rattion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="col-lg-12 text-center">
                <h4 class="text-light">Data Saat Ini Kosong <i class="fas fa-exclamation"></i></h4>
            </div>
        @endif
        <!-- Testimonial End -->
        <!--? Blog Area Start -->
        <div id="galeri" class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-50">
                            <span>Tentang Kegiatan Sekolah</span>
                            <h2>Galeri Sekolah</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data['galeri'] as $d)
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="home-blog-single mb-30">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        <img src="{{ asset($d->path_file) }}" alt="">
                                        <!-- Blog date -->
                                        <div class="blog-date text-center">
                                            <span>{{ date('d F Y', strToTime($d->created_at)) }}</span>
                                            <p>{{ $d->jenis }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-cap">
                                        <p>|{{ $d->jenis }}</p>
                                        <p class="text-justify">{{ $d->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31914.70356499974!2d119.85713471713349!3d-0.889110008488861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bed0e90fa90d5%3A0xbb3a0448bc41b4fb!2sSD%20MUHAMMADIYAH%203%20PALU!5e0!3m2!1sid!2sid!4v1658818826127!5m2!1sid!2sid" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="col-xl-6 mt-4">
                                <div class="col-xl-12 col-lg-7 col-md-10">
                                    <div class="footer-tittle2">
                                        <h4>Tetap Update</h4>
                                    </div>
                                    @if ($data['profile'])
                                        <ul style="color: white; margin-bottom: 50px">
                                            <li><span class="flaticon-business"></span>
                                                {{ $data['profile']->alamat }}, Desa.{{ $data['profile']->desa }}, Kec.{{ $data['profile']->kecamatan }}.
                                                Prov.{{ $data['profile']->provinsi }}
                                            </li>
                                            <li><span class="flaticon-communications-1"></span>{{ $data['profile']->telepon }} </li>
                                            <li><span class="flaticon-graduated"></span>{{ $data['profile']->status_sekolah }}</li>
                                        </ul>
                                    @endif
                                </div>
                                <div class="col-xl-12 col-lg-5">
                                    <div class="footer-tittle2">
                                        <h4>Daftar Sekarang</h4>
                                    </div>
                                    <!-- Footer Social -->
                                    <div class="mb-4">
                                        <a class="btn btn-primary" href="{{route('auth.register')}}">Klick disini <i class="far fa-hand-pointer"></i></a>
                                    </div>
                                    <span class="mt-4"><h5 style="color: white">Bergabung bersama kami sekarang juga!</h5></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('web/./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('web/./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('web/./assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('web/./assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('web/./assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('web/./assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('web/./assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('web/./assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/jquery.sticky.js') }}"></script>

    <!-- counter , waypoint -->
    <script src="{{ asset('web/./assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/waypoints.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('web/./assets/js/contact.js') }}"></script>
    <script src="{{ asset('web/./assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('web/./assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('web/./assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('web/./assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('web/./assets/js/plugins.js') }}"></script>
    <script src="{{ asset('web/./assets/js/main.js') }}"></script>
</body>

</html>
