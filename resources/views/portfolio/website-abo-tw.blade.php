@extends('layouts.master')
@section('meta_description', '作品集：A-Bo 的部落格')
@section('title', '作品集：A-Bo 的部落格')
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
                <li>作品集：A-Bo 的部落格</li>
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
                            <img src="{{ asset('img/portfolio/website-abo-tw-1.png') }}" alt="A-Bo 的部落格首頁">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-abo-tw-2.png') }}" alt="A-Bo 的部落格頁面一">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/portfolio/website-abo-tw-3.png') }}" alt="A-Bo 的部落格頁面二">
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
                        <li><strong>名稱：</strong>A-Bo 的部落格</li>
                        <li><strong>網址：</strong><a href="https://abo.tw" title="A-Bo 的部落格" target="_blank">abo.tw</a></li>
                        <li><strong>製作日期：</strong>2013 年至今</li>
                        <li><strong>使用系統：</strong>Joomla! 3</li>

                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>匯集個人心得與感想的部落格</h2>
                    <p>華燈初上網站原本是作為自己的部落格使用，因為持續在網站上經營與 Joomla! 有關的內容與教學，在區別「Joomla! 資訊」與「個人興趣」的思考下將自己興趣的電腦軟硬體、動漫畫、遊戲等文章及活動攝影獨立出來另外建立部落格網站，同時賦予新的域名：abo.tw。</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 作品資訊 -->

@stop
