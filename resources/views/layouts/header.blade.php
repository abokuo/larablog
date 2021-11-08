<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="{{ route('home') }}"><span>{{ setting('site.title') }}</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>-->
        </div>

        <!-- .navbar -->
        {{ menu('frontend', 'menu.menu_layout') }}
    </div>

</header>
