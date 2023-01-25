<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
    <head>
        <base href="./" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template" />
        <meta name="author" content="Łukasz Holeczek" />
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard" />
        <title>LSP_PERPUS</title>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/assets/favicon/apple-icon-57x57.png') }}" />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/assets/favicon/apple-icon-60x60.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/assets/favicon/apple-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/assets/favicon/apple-icon-76x76.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/assets/favicon/apple-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/assets/favicon/apple-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/assets/favicon/apple-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/assets/favicon/apple-icon-152x152.png') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/assets/favicon/apple-icon-180x180.png') }}" />
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('storage/assets/favicon/android-icon-192x192.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/assets/favicon/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/assets/favicon/favicon-96x96.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/assets/favicon/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ asset('storage/assets/favicon/manifest.json') }}" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="{{ asset('storage/assets/favicon/ms-icon-144x144.png') }}" />
        <meta name="theme-color" content="#ffffff" />
        <!-- Vendors styles-->
        <link rel="stylesheet" href="{{ asset('storage/vendors/simplebar/css/simplebar.css') }}" />
        <link rel="stylesheet" href="{{ asset('storage/css/vendors/simplebar.css') }}" />
        <!-- Main styles for this application-->
        <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet" />
        <!-- We use those styles to show code examples, you should remove them in your application.-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <link href="{{ asset('storage/css/examples.css') }}" rel="stylesheet" />
        <!-- Global site tag (gtag.js) - Google Analytics-->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            // Shared ID
            gtag("config", "UA-118965717-3");
            // Bootstrap ID
            gtag("config", "UA-118965717-5");
        </script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
        <link href="{{ asset('storage/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet" />
    </head>
    <body>
        @include('user.layout.sidebar')
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <section id="main">
                @include('user.layout.header')
                <div class="body flex-grow-1 px-3">
                    <section id="content">
                        @yield('content')
                    </section>
                </div>
                @include('user.layout.footer')
            </section>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
        <!-- CoreUI and necessary plugins-->
        <script src="{{ asset('storage/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
        <script src="{{ asset('storage/vendors/simplebar/js/simplebar.min.js') }}"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="{{ asset('storage/vendors/chart.js/js/chart.min.js') }}"></script>
        <script src="{{ asset('storage/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
        <script src="{{ asset('storage/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
        <script src="{{ asset('storage/js/main.js') }}"></script>
        <script></script>
    </body>
</html>
