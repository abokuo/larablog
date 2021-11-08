@extends('layouts.master')
@section('meta_description', '作品集：Joomla! 素人架站計畫 Power Pack')
@section('title', '作品集：Joomla! 素人架站計畫 Power Pack')
@section('cover_image', asset('img/portfolio/joomla25-pp-book.png'))
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
                <li>作品集：Joomla! 素人架站計畫 Power Pack</li>
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
                            <img src="{{ asset('img/portfolio/joomla25-pp-book.png') }}" alt="Joomla! 素人架站計畫 Power Pack">
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
                        <li><strong>出版日期：</strong>2013 年 10 月</li>
                        <li><strong>ISBN：</strong>978-986-276-942-3</li>
                        <li><strong>書籍簡介：</strong><a
                                href="https://www.abokuo.com/about-my-works/my-joomla-books/introduction-of-joomla25pp.html"
                                target="_blank">華燈初上</a></li>
                        <li><strong>購買電子版：</strong><a
                                    href="https://play.google.com/store/books/details/A_Bo_%E6%9D%8E%E9%A0%86%E8%83%BD_Joomla_%E7%B4%A0%E4%BA%BA%E6%9E%B6%E7%AB%99%E8%A8%88%E7%95%ABPower_Pack_%E9%9B%BB%E5%AD%90%E6%9B%B8?id=hf2lAwAAQBAJ&hl=zh_TW&gl=US"
                                    target="_blank">Google Play 圖書</a></li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>中文世界第一本 Joomla! 擴充套件專書</h2>
                    <p>本書是《Joomla! 2.5 素人架站計畫》的火力支援。</p>
                    <p>Joomla! 因其開發架構的優越性，讓眾多開發者能在其上擴充套件，也因為擴充套件的種類眾多，讓Joomla!能夠滿足絕大部分的架站需求。</p>
                    <p>不過，面對這麼充沛的擴充套件資源，卻沒有一本以此為主題的中文書籍。本書就是為了彌補這樣的缺憾而生的。這本書可以解答「用 Joomla! 可以做什麼？」的問題，告訴您在面對常見網站應用時可以使用哪些擴充套件完成。</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
