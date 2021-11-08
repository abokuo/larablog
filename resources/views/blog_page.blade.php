@extends('layouts.master')
@section('meta_description', $post->introtext)
@section('title', $post->title)
@section('cover_image', Voyager::image($post->cover_image))
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
                    {{ Breadcrumbs::render('post', $post) }}
                </ol>
            </div>
        </div>
    </section>
    <!-- 網頁路徑 -->


<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 entries">
                <article class="entry entry-single">
                    <div class="entry-img">
                        <img src="{{ Voyager::image($post->cover_image) }}" alt="{{ $post->title }}" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="{{ url()->full() }}">{{ $post->title }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                    href="#profile">{{ $post->user->name }}</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time
                                    datetime="{{ $post->created_at->toDateString() }}">{{ $post->created_at->toDateString() }}</time>
                            </li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                    href="#comments">{{ $post->comments->count() }} 則回應</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                            {!! ($post->content) !!}
                    </div>
                    <a name="profile">
                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="/cagegory/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @foreach($post->tags as $tag)
                                <li><a href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                </article>
                <!-- End blog entry -->

                <a name="comments">
                <!-- 作者個人資料 -->
                @include('widgets.author_bio')
                <!-- 作者個人資料 -->

                <!-- 前後頁導覽條 -->
                <div class="entry">
                    <div class="d-flex justify-content-between align-items-center">
                        @if(!isset($previous_post))
                            &nbsp;
                        @else
                            <a href="/blog/{{ $previous_post->slug }}">< {{ $previous_post->title }}</a>
                        @endif
                        @if(!isset($next_post))
                            &nbsp;
                        @else
                            <a href="/blog/{{ $next_post->slug }}">{{ $next_post->title }} ></a>
                        @endif
                    </div>
                </div>
                <!-- 前後頁導覽條 -->

                <!-- 文章回應 -->
                @include('widgets.with_comments')
                <!-- 文章回應 -->
            </div><!-- End blog entries list -->

            <!-- 側邊欄 -->
            <div class="col-lg-4">
                <!-- 文章目次 -->
                <div class="sidebar">
                    <h3 class="sidebar-title">文章目次</h3>
                    {!! $toc !!}
                </div>
                <!-- 文章目次 -->

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
</section><!-- End Blog Single Section -->
@stop
