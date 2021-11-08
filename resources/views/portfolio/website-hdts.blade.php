@extends('layouts.master')
@section('meta_description', '作品集：華燈初上網站')
@section('title', '作品集：華燈初上網站')
@section('cover_image', asset('img/portfolio/website-hdts-1.png'))
@section('url', url()->full())
@section('nav_about', 'active')
@section('index_rule', 'index , follow')
@section('content')

<!-- 網頁路徑 -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>作品集</h2>
            <ol>
                <li><a href="{{ route('home') }}">首頁</a></li>
                <li><a href="{{ route('about') }}">關於我</a></li>
                <li>作品集：華燈初上網站</li>
            </ol>
        </div>
    </div>
</section>
<!-- 網頁路徑 -->

<!-- 作品資訊 -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-hdts-1.png') }}" alt="華燈初上網站首頁">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-hdts-2.png') }}" alt="華燈初上網站頁面一">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-hdts-3.png') }}" alt="華燈初上網站頁面二">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>作品資訊</h3>
                    <ul>
                        <li><strong>分類：</strong>網站</li>
                        <li><strong>名稱：</strong>華燈初上</li>
                        <li><strong>網址：</strong><a href="https://www.abokuo.com" title="華燈初上網站" target="_blank">www.abokuo.com</a></li>
                        <li><strong>製作日期：</strong>1999 年至今</li>
                        <li><strong>使用系統：</strong>Joomla! 3</li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Joomla! 新聞、教學文章、討論的網站</h2>
                    <p>華燈初上是開放原碼管理系統「Joomla!」的資訊網站，在此可以找到與 Joomla! 有關的新聞發佈、心得分享、書籍與實體活動資訊。</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
