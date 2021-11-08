@extends('layouts.master')
@section('meta_description', '作品集：Joomla! 3.x 素人架站計畫')
@section('title', '作品集：Joomla! 3.x 素人架站計畫')
@section('cover_image', asset('img/portfolio/joomla3-book.png'))
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
                <li>作品集：Joomla! 3.x 素人架站計畫</li>
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
                            <img src="{{ asset('img/portfolio/joomla3-book.png') }}" alt="Joomla! 3.x 素人架站計畫">
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
                        <li><strong>出版日期：</strong>2015 年 07 月</li>
                        <li><strong>ISBN：</strong>978-986-347-682-5</li>
                        <li><strong>書籍簡介：</strong><a
                                href="https://www.abokuo.com/about-my-works/my-joomla-books/introduction-of-joomla-3-dot-x-guidebook.html"
                                target="_blank">華燈初上</a></li>
                        <li><strong>購買電子版：</strong><a
                                    href="https://play.google.com/store/books/details/A_Bo_%E6%9D%8E%E9%A0%86%E8%83%BD_Joomla_3_x%E7%B4%A0%E4%BA%BA%E6%9E%B6%E7%AB%99%E8%A8%88%E7%95%AB_%E9%9B%BB%E5%AD%90%E6%9B%B8?id=NFVBCgAAQBAJ&hl=zh_TW&gl=US"
                                    target="_blank">Google Play 圖書</a></li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>從本書認識 Joomla! 3 系列，從而建立完整功能的網站</h2>
                    <p>Joomla! 是國外知名的內容管理系統，國內外政府機構、大專院校、非營利機構及基金會、公司行號都有使用 Joomla! 建構網站，現在你也可以透過本書完成自己的架站計畫。</p>
                    <p>本書向你說明 Joomla! 系列版本的沿革，Joomla! 3 系列特色、安裝及使用等內容，透過本書你能瞭解這個迷人系統的內涵，取得與 Joomla! 有關的各項資源，加入 Joomla! 討論社群，一同分享與討論 Joomla!。</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
