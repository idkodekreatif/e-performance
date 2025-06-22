<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ $title }}</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('Assets/images/favicon.png') }}">
    <link href="{{ asset('Assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/vendor/nouislider/nouislider.min.css') }}">


    <!-- Style css -->
    <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
    @stack('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('sweetalert::alert')
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <x-nav-header />
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <x-chat-box />
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <x-header />
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <x-side-bar />
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                {{-- Body --}}
                {{ $slot }}
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
            Footer start
        ***********************************-->
        <x-footer />
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('Assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('Assets/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('Assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('Assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('Assets/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <script src="{{ asset('Assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('Assets/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('Assets/js/demo.js') }}"></script>
    {{-- <script src="{{ asset('Assets/js/styleSwitcher.js') }}"></script> --}}
    @stack('JavaScript')
    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */
            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>

</body>

</html>
