@extends('layouts.master')
@section('meta_description', '作品集：ffxitoolbox')
@section('title', '作品集：ffxitoolbox')
@section('cover_image', asset('img/portfolio/website-ffxitoolbox-1.png'))
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
                <li>作品集：ffxitoolbox</li>
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
                            <img src="{{ asset('img/portfolio/website-ffxitoolbox-1.png') }}" alt="ffxitoolbox網站首頁">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-ffxitoolbox-2.png') }}" alt="ffxitoolbox網站頁面一">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-ffxitoolbox-3.png') }}" alt="ffxitoolbox網站頁面二">
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
                        <li><strong>名稱：</strong>ffxitoolbox</li>
                        <li><strong>網址：</strong><a href="https://ffxitoolbox.abokuo.com" title="ffxitoolbox" target="_blank">ffxitoolbox.abokuo.com</a></li>
                        <li><strong>上線日期：</strong>2021 年 03 月 31 日</li>
                        <li><strong>使用系統：</strong>PHP + MySQL -> Laravel 8</li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Final Fantasy XI 合成資料查詢網站</h2>
                    <p>這個網站是我學習 PHP 程式設計，參考網路上 Final Fantasy XI 遊戲資料網站內容製作的 POC 網站。原先以純 PHP 程式碼撰寫，隨著學習使用 Laravel 框架將運作核心以 Laravel 重新寫過。
                    <p>在使用 Laravel 框架改版期間感謝<a href="https://www.facebook.com/goblinlab" target="_blank">哥布林工程師</a>
                        的 <a href="https://webinar.pandalab.org/laravel-millionaire" target="_blank">Laravel百萬年薪課程</a>
                        教材，讓初學 Laravel 的我在遭遇問題時獲得有力支援。
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
