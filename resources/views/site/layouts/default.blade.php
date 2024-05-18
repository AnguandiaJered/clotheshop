<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('site.layouts.partials.header')
</head>

<body class="@yield('body-class')">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57CZZR2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="pageloader" style="z-index: 999999;">
        <div class="loader">
            <div class="loader-inner semi-circle-spin">
                <div></div>
            </div>
        </div>
    </div><!-- Pageloader -->



    <div id="main-wrapper">
        @include('site.layouts.partials.navbar')

        @yield('content')

        @include('site.layouts.partials.footer')
    </div>
  <!--Back To Start-->
  <button id="backBtn" class="back-to-top"><i class="pe-7s-angle-up"></i></button>
  <!--Back To End-->

    @include('site.layouts.partials.scripts')
</body>

</html>
