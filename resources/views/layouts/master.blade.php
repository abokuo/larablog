<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- meta and open graph information -->
    <title>@yield('title') - 從零開始的 Laravel 部落格建置日誌</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="og:title" content="@yield('title')" />
    <meta name="og:type" content="article" />
    <meta name="og:image" content="@yield('cover_image')" />
    <meta name="og:url" content="@yield('url')" />
    <meta name="og:site_name" content="從零開始的 Laravel 部落格建置日誌" />
    <meta name="og:description" content="@yield('meta_description')" />
    <meta name="robots" content="@yield('index_rule')" />

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Highlight.js CSS File -->
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.2.0/styles/monokai-sublime.min.css">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Algolia Search Engine -->
    <link href="{{ asset('css/algolia.css') }}" rel="stylesheet">
    <!-- 同意 Cookie 存取 -->
    <link rel="stylesheet" href="{{ asset('css/grt-cookies-consent.css') }}" type="text/css" media="all" />

    @livewireStyles
    <!-- =======================================================
  * Template Name: Moderna - v4.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D0VDXY5R3M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D0VDXY5R3M');
</script>

</head>

<body>
    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->
    <main id="main">

        <!-- ======= Blog Section ======= -->

        <!-- 頁面主內容 -->
        @yield('content')
        <!-- 頁面主內容 -->

    </main><!-- End #main -->

    <!-- 同意 Cookie 存取 -->
	<div class="grt-cookie">
		<div class="grt-cookies-msg">
			<p>本網站使用 cookie 功能增進網站使用體驗，如果你繼續使用本網站將認定接受並理解本網站的隱私權政策和服務條款。 <a href="/privacy-policy">隱私權政策</a>　<a href="/terms">服務條款</a>
			</p>
		</div>
		<span class="grt-cookie-button">瞭解</span>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Algolia Search Engine -->
    <script src="{{ asset('js/algolia.js') }}"></script>

    <!-- Highlight.js JS File -->
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.2.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <!-- 同意 Cookie 存取 -->
	<script src="{{ asset('js/grt-cookie-consent.js') }}"></script>

	<script>
		// Start the plugin with defalt settings
		// $(".grt-cookies").grtCookie();

		// Custom Settings
		$(".grt-cookie").grtCookie({
			// Main text and background color
			textcolor: "#222222",
			background: "#a2cce3",
			// Button colors
			buttonbackground: "#4fa6d5",
			buttontextcolor: "#fff",
			// Duration in days
			duration: 365,
		});
	</script>

    @livewireScripts
</body>

</html>
