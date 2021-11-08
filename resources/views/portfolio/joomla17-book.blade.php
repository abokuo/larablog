@extends('layouts.master')
@section('meta_description', '作品集：使用 Joomla! 1.7 架站的 13 堂課')
@section('title', '作品集：使用 Joomla! 1.7 架站的 13 堂課')
@section('cover_image', asset('img/portfolio/joomla17-book.png'))
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
                <li>作品集：使用 Joomla! 1.7 架站的 13 堂課</li>
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
                            <img src="{{ asset('img/portfolio/joomla17-book.png') }}" alt="使用 Joomla! 1.7 架站的 13 堂課">
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
                        <li><strong>出版日期：</strong>2011 年 10 月</li>
                        <li><strong>ISBN：</strong>978-986-276-328-5</li>
                        <li><strong>書籍簡介：</strong><a
                                href="https://www.abokuo.com/about-my-works/my-joomla-books/joomla-17-book-preview.html"
                                target="_blank">華燈初上</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Joomla! 1.7 CMS的學習書籍</h2>
                    <p>
                        這是我的第一本商業出版品，透過此書你可以瞭解 Joomla! 1.7 內容管理系統的各項功能，使用 Joomla! 1.7 建構網站的好處，在短時間內建立完整功能的網站。
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
