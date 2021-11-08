@extends('layouts.master')
@section('meta_description', '作品集：使用 J2Store 開設網路商店的10堂課：商品管理x物流x金流x客服一次搞定')
@section('title', '作品集：使用 J2Store 開設網路商店的10堂課：商品管理x物流x金流x客服一次搞定')
@section('cover_image', asset('img/portfolio/j2store-book.png'))
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
                <li>作品集：使用 J2Store 開設網路商店的10堂課：商品管理x物流x金流x客服一次搞定</li>
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
                            <img src="{{ asset('img/portfolio/j2store-book.png') }}" alt="使用 J2Store 開設網路商店的10堂課：商品管理x物流x金流x客服一次搞定">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>作品資訊</h3>
                    <ul>
                        <li><strong>分類：</strong>書籍</li>
                        <li><strong>出版社：</strong>碁峰出版社</li>
                        <li><strong>出版日期：</strong>2018 年 06 月</li>
                        <li><strong>ISBN：</strong>978-986-476-848-6</li>
                        <li><strong>書籍簡介：</strong><a
                                href="https://www.abokuo.com/about-my-works/my-joomla-books/introduction-of-j2store-guidebook.html"
                                target="_blank">華燈初上</a></li>
                        <li><strong>購買電子版：</strong><a
                                    href="https://play.google.com/store/books/details/A_Bo_%E6%9D%8E%E9%A0%86%E8%83%BD_%E4%BD%BF%E7%94%A8J2Store%E9%96%8B%E8%A8%AD%E7%B6%B2%E8%B7%AF%E5%95%86%E5%BA%97%E7%9A%8410%E5%A0%82%E8%AA%B2_%E5%95%86%E5%93%81%E7%AE%A1%E7%90%86x%E7%89%A9%E6%B5%81x%E9%87%91%E6%B5%81x%E5%AE%A2%E6%9C%8D%E4%B8%80%E6%AC%A1%E6%90%9E%E5%AE%9A_%E9%9B%BB%E5%AD%90?id=1K5oDwAAQBAJ&hl=zh_TW&gl=US"
                                    target="_blank">Google Play 圖書</a></li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>為電子商務的初期經營，提供低成本、高品質又可靠的解決方案</h2>
                    <p>J2Store 是建構在 Joomla! 系統上的購物車套件，提供商品上架、金流、物流、優惠券、電子報、客服等各種現代網路商店必備功能。</p>
                    <p>本書是作者的親身經驗分享，藉由本書的指引，您將可以了解從購買、安裝 J2Store 到 Joomla! 網站的流程，並逐漸熟悉各項操作與設定，逐步實現開店創業的夢想。</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
