@extends('layouts.master')
@section('meta_description', 'A-Bo Lee 使用 Laravel 建置的部落格系統建置過程文紀錄。')
@section('title', '文章')
@section('cover_image', Voyager::image('articles/blog.png'))
@section('url', url()->full())
@section('nav_blog', 'active')
@section('index_rule', 'index , follow')
@section('content')

    <!-- 網頁路徑 -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>建置日誌</h2>
                <ol>
                    {{ Breadcrumbs::render('blog') }}
                </ol>
            </div>
        </div>
    </section>
    <!-- 網頁路徑 -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <!-- 文章區域 -->
                    <div class="col-lg-8 entries">

                        @foreach($posts as $post)
                        <article class="entry">
                            <div class="entry-img">
                                <a href="/blog/{{ $post->slug }}">
                                <img src="{{ Voyager::image($post->cover_image) }}" border="0" alt="{{ $post->title }}" class="img-fluid">
                                </a>
                            </div>

                            <h2 class="entry-title">
                                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time
                                        datetime="{{ $post->created_at->toDateString() }}">{{ $post->created_at->toDateString() }}</time>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-folder"></i><a href="/cagegory/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="/blog/{{ $post->slug }}#comments">{{ $post->comments->count() }} 回應</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                {!! $post->introtext !!}
                                </p>
                                <div class="read-more">
                                    <a href="/blog/{{ $post->slug }}">詳細閱讀</a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                        @endforeach

                        <div class="blog-pagination">

                            <ul class="justify-content-center">
                                {{ $posts->links() }}
                            </ul>
                        </div>

                    </div>
                    <!-- 文章區域 -->
                    <!-- 側邊欄 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <!-- 搜尋表單 -->
                            @include('widgets.search')
                            <!-- 搜尋表單 -->

                            <!-- 文章分類 -->
                            @include('widgets.categories')
                            <!-- 文章分類 -->

                            <!-- 近期文章 -->
                            @include('widgets.recent_posts')
                            <!-- 近期文章 -->

                            <!-- 近期回應 -->
                            @include('widgets.recent_comments')
                            <!-- 近期回應 -->


                            <!-- 標籤雲 -->
                            @include('widgets.tags')
                            <!-- 標籤雲 -->
                        </div><!-- End sidebar -->
                    </div><!-- End blog sidebar -->
                    <!-- 側邊欄 -->
                </div>


            </div>
        </section><!-- End Blog Section -->
@stop
