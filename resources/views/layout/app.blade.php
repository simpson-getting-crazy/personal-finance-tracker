<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>Spike Bootstrap Admin</title>
    <!-- jvectormap  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/jvectormap/jquery-jvectormap.css') }}">

    <link href="https://rawcdn.githack.com/ferdinalaxewall/beautyToast/v1.0.0b/beautyToast.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        @include('layout.sidebar')

        <div class="page-wrapper">
            <div class="body-wrapper">
                <div class="container-fluid">

                    @include('layout.header')

                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    $("html").attr("data-color-theme", e);
                    $(e).prop("checked", !0);
                }
            </script>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.dark.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/theme/feather.min.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/libs/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/extra-libs/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards/dashboard.js') }}"></script>

    <script src="https://rawcdn.githack.com/ferdinalaxewall/beautyToast/v1.0.0b/beautyToast.min.js"></script>

    <script>
        beautyToast.settings({
            darkTheme: true,
            iconWidth: 28,
            iconHeight: 28,
            iconSize: 28,
            closeButton: true,
            timeout: 3000,
            animationTime: 180,
        });

        @if (Session::has('toastSuccess'))
            beautyToast.success({
                title: 'Berhasil!',
                message: "{{ Session::get('toastSuccess') }}",
                backgroundColor: '#1B2A41',
                titleColor: '#01C38D',
                messageColor: '#E1E6EF',
                iconColor: '#01C38D',
            });
        @elseif (Session::has('toastError'))
            beautyToast.error({
                title: 'Error!',
                message: "{{ Session::get('toastError') }}",
                backgroundColor: '#1B2A41',
                titleColor: '#FF5E5E',
                messageColor: '#E1E6EF',
                iconColor: '#FF5E5E'
            });
        @elseif (Session::has('toastWarning'))
            beautyToast.warning({
                title: 'Peringatan!',
                message: "{{ Session::get('toastWarning') }}",
                backgroundColor: '#1B2A41',
                titleColor: '#FFC857',
                messageColor: '#E1E6EF',
                iconColor: '#FFC857'
            });
        @elseif (Session::has('toastInfo'))
            beautyToast.info({
                title: 'Info',
                message: "{{ Session::get('toastInfo') }}",
                backgroundColor: '#1B2A41',
                titleColor: '#3ABEF9',
                messageColor: '#E1E6EF',
                iconColor: '#3ABEF9'
            });
        @endif
    </script>
    <script>
        // Add preloader-active to body to hide scroll
        document.body.classList.add('preloader-active');
        window.addEventListener('load', function () {
            // Hide preloader after page load
            var preloader = document.querySelector('.preloader');
            if (preloader) {
                preloader.style.display = 'none';
            }
            document.body.classList.remove('preloader-active');
        });
    </script>
</body>

</html>
