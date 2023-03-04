<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Around | Corporate</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" color="#6366f1" href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="{{ asset('assets/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="white">
    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== undefined && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }


    </script>
    <!-- Page loading styles-->
    <style>.page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .dark-mode .page-loading {
            background-color: #121519;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }
        .dark-mode .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        .dark-mode .page-spinner {
            background-color: rgba(255,255,255,.25);
        }
        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1500);
            };
        })();

    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/aos/dist/aos.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}">
    <!-- Customizer generated styles-->
    <style id="customizer-styles"></style>
</head>
<!-- Body-->
<body>
<!-- Page loading spinner-->
{{--<div class="page-loading active">--}}
{{--    <div class="page-loading-inner">--}}
{{--        <div class="page-spinner"></div><span>Loading...</span>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Customizer modal-->
{{--<div class="modal fade" id="customizer-modal" tabindex="-1" role="dialog">--}}
{{--    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h4 class="modal-title">Your custom styles</h4>--}}
{{--                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body py-4">--}}
{{--                <p class="mb-3">Grab the generated styles below. Wrap them inside <code>&lt;style&gt;</code> tag and put in the <code>&lt;head&gt;</code> section of your HTML document.</p>--}}
{{--                <p class="mb-4"><span class='fw-medium'>IMPORTANT:</span> In order for these styles to take effect you have to placed them below:<br><code>&lt;link rel=&quot;stylesheet&quot; media=&quot;screen&quot; href=&quot;assets/css/theme.min.css&quot;&gt;</code></p>--}}
{{--                <div class="bg-secondary overflow-hidden rounded-4">--}}
{{--                    <pre class="text-wrap bg-transparent border-0 text-dark p-4" id="custom-generated-styles"></pre>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button" data-bs-dismiss="modal">Close</button>--}}
{{--                <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button" id="copy-styles-btn"><i class="ai-copy me-2 ms-n1"></i>Copy styles</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Page wrapper-->
<main class="page-wrapper">
    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
    @include('nav.top-nav')
    <!-- Page content-->
    @yield('content')
</main>
<!-- Footer-->
<footer class="footer dark-mode bg-dark pb-3 pt-sm-3 py-md-4 py-lg-5">
    <div class="container pb-4 pt-5">
        <div class="d-md-flex align-items-center justify-content-between pb-1 pb-md-0 mb-4 mb-md-5">
            <nav class="nav justify-content-center justify-content-md-start pb-sm-2 pb-md-0 mb-4 mb-md-0 ms-md-n3">
                <a class="nav-link py-1 px-0 mx-3" href="#">Home</a>
                <a class="nav-link py-1 px-0 mx-3" href="#">Services</a>
                <a class="nav-link py-1 px-0 mx-3" href="#">Contact</a>
            </nav>
{{--            <div class="d-flex justify-content-center justify-content-md-start me-md-n2">--}}
{{--                <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a>--}}
{{--                <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a>--}}
{{--                <a class="btn btn-icon btn-sm btn-secondary btn-twitter rounded-circle mx-2" href="#"><i class="ai-twitter"></i></a>--}}
{{--                <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a>--}}
{{--            </div>--}}
        </div>
        <div class="d-md-flex align-items-center justify-content-between text-center text-md-start"><a class="nav-link d-inline-block text-muted fs-sm text-decoration-none order-md-2 py-1 px-0 mb-3 mb-md-0" href="#">Privacy policy</a>
            <p class="fs-sm order-md-1 mb-0"><span class="opacity-70">&copy; All rights reserved. Made by </span><a class="nav-link d-inline fw-normal p-0" href="" target="_blank" rel="noopener">Cube Web Services</a></p>
        </div>
    </div>
</footer>
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
    <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
    </svg><i class="ai-arrow-up"></i></a>
<!-- Vendor scripts: js libraries and plugins-->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
<!-- Main theme script-->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

</body>
</html>
