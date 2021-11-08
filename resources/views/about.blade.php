@extends('layouts.master')
@section('meta_keywords', 'larablog, laravel, A-Bo Lee')
@section('meta_description', '關於我：A-Bo Lee 的自我介紹')
@section('title', '關於我：A-Bo Lee')
@section('cover_image', Voyager::image('articles/about.png'))
@section('url', url()->full())
@section('nav_about', 'active')
@section('index_rule', 'index , follow')
@section('content')

<!-- 網頁路徑 -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>關於我</h2>

                <ol>
                    {{ Breadcrumbs::render('about') }}
                </ol>
            </div>
        </div>
    </section>
<!-- 網頁路徑 -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 blog entry entry-content">
                            <h3>關於我：李順能（A-Bo Lee）</h3>
                            <img src="img/portfolio/profile.jpg" alt="個人大頭照" align="right" hspace="20">
                            <div class="social-links">
                                <a href="https://www.linkedin.com/in/sunnenglee/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                <a href="https://github.com/abokuo" target="_blank"><i class="bi bi-github"></i></a>
                                <a href="#contact"><i class="bi bi-envelope"></i>
                                <a href="https://www.facebook.com/abokuo" target="_blank"><i class="bi bi-facebook"></i></a>
                                <a href="https://twitter.com/abokuo" target="_blank"><i class="bi bi-twitter"></i></a>
                            </div>

                            <ul>
                                <li>樹德科技大學資訊管理研究所碩士</li>
                                <li>具備PHP(Laravel)程式設計、網站運作平台建置及管理能力</li>
                                <li>開放原碼內容管理系統：Joomla! 教學書籍作者、推廣講師</li>
                            </ul>

                            <h4>求職意向：junior PHP(Laravel) programmer</h4>
                                <p>　　本人熟悉 Laravel 專案建置流程，同時擁有網管知識，能將 Laravel 專案運作平台從無到有建立完成，以及後續維護。
                            <h4>個人特質</h4>
                                <p>　　主動學習、樂於分享，能將自身心得透過容易理解的圖文方式整理成教學文件。</p>
                            <h4>學歷與證照、訓練</h4>
                            <ul>
                                <li>樹德科技大學資訊管理研究所畢業</li>
                                <li>乙級電腦硬體裝修技術士</li>
                                <li>勞動部勞動力發展署「網路管理與通信技術整合實務」班結業</li>
                                <li>日語 JLPT N1</li>
                            </ul>
                            <h4>相關經歷</h4>
                            <ul>
                                <li><strong>即時互動科技有限公司 系統工程師</strong>（高雄市前鎮區）<br />
                                    工作時間：2020/4~2020/7<br />
                                    工作內容：管理公司位於 AWS 的 EC2/RDS 主機、協助同仁建構、維護專案網站，以及其他主管交辦事項。
                                </li>
                                <li><strong>慶勝騰科技股份有限公司 系統工程師</strong>（高雄市三民區）<br />
                                    工作時間：2019/1~2019/7<br />
                                    工作內容：區塊鏈（Hyperledger Fabric）運作環境規劃與建置、公司網路軟硬體環境規劃及建置，其他主管交代事項。
                                </li>
                                <li><strong>城邦出版集團貓頭鷹出版社 專案管理工程師</strong>（台北市中山區）<br />
                                    工作時間：2012/5~2013/4<br />
                                    工作內容：負責出版社相關網站維護、新功能協同開發。
                                </li>
                            </ul>

                        </div><!-- End blog entries list -->
            </div><!-- End blog sidebar -->
        </div>
    </section>
<!-- 作品集 -->
    @include('widgets.portfolio')
<!-- 聯絡表單 -->
    @include('widgets.contact_form')
@stop
