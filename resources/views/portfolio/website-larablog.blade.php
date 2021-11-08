@extends('layouts.master')
@section('meta_description', '作品集：從零開始的 Laravel 部落格建置日誌')
@section('title', '作品集：從零開始的 Laravel 部落格建置日誌')
@section('cover_image', asset('img/portfolio/website-larablog-1.png'))
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
                <li>作品集：從零開始的 Laravel 部落格建置日誌</li>
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
                            <img src="{{ asset('img/portfolio/website-larablog-1.png') }}" alt="從零開始的 Laravel 部落格建置日誌首頁">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-larablog-2.png') }}" alt="從零開始的 Laravel 部落格建置日誌頁面一">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-larablog-3.png') }}" alt="從零開始的 Laravel 部落格建置日誌頁面二">
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
                        <li><strong>名稱：</strong>從零開始的 Laravel 部落格建置日誌</li>
                        <li><strong>網址：</strong><a href="https://larablog.abokuo.com" title="larablog" target="_blank">larablog.abokuo.com</a></li>
                        <li><strong>上線日期：</strong>2021 年 10 月 16 日</li>
                        <li><strong>使用系統：</strong>Laravel 8</li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>記載部落格系統建置過程的部落格</h2>
                    <p>「部落格系統」是學習 PHP（及 Laravel）程式設計後預計落實的第一個 side project，不過在當時以原生 PHP 語法製作的《ffxitoolbox》已經上線運作，在已有資料庫資料可使用的情況下變更行動順序，在《ffxitoolbox》改版完成後用當中學習到的知識建置部落格系統。</p>
                    <p>製作《ffxitoolbox》的學習目標是：學習 Laravel 框架運作，並以此建立網站專案；到了《從零開始的 Laravel 部落格建置日誌》則是活用資料庫關聯，使用 Voyager 套件建置網站管理區，加上更多先進開發的套件完善網站專案的各項操作。
                    <p>部落格的核心就是文章，我想把使用 Laravel 建置部落格的過程透過系列文章一一陳述。除了能提供網站文章資源，也是對自己建置的過程留下紀錄及梳理。</p>
                    <p>在此感謝<a href="https://www.facebook.com/goblinlab" target="_blank">哥布林工程師</a>
                        的 <a href="https://service.pandalab.org/laravelcare" target="_blank">Laravel Care</a>
                        計畫，在本專案建置過程中遇到的大小問題提供協助。</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
