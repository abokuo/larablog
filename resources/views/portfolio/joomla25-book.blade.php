@extends('layouts.master')
@section('meta_description', '作品集：Joomla! 2.5 素人架站計畫')
@section('title', '作品集：Joomla! 2.5 素人架站計畫')
@section('cover_image', asset('img/portfolio/joomla25-book.png'))
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
                <li>作品集：Joomla! 2.5 素人架站計畫</li>
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
                            <img src="{{ asset('img/portfolio/joomla25-book.png') }}" alt="Joomla! 2.5 素人架站計畫">
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
                        <li><strong>出版日期：</strong>2012 年 09 月</li>
                        <li><strong>ISBN：</strong>978-986-276-563-0</li>
                        <li><strong>書籍簡介：</strong><a
                                href="https://www.abokuo.com/about-my-works/my-joomla-books/introduction-of-joomla25-book.html"
                                target="_blank">華燈初上</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Joomla! 2.5 CMS的學習書籍</h2>
                    <p>
                        Joomla! 2.5 是接替 Joomla! 1.7 之後的 Joomla! 穩定發行版，本書帶領讀者瞭解 Joomla! 2.5 的各項功能，透過安裝擴充套件增加或增強網站功能。本書曾多次增刷，意味著更多人從 Joomla! 2.5 開始認識這個在國外獲獎多數的優良內容管理系統。
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
