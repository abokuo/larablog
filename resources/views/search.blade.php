@extends('layouts.master')
@section('meta_description', '搜尋 '. $keyword . ' 的結果')
@section('title', '搜尋 '. $keyword . ' 的結果')
@section('cover_image', Voyager::image('articles/search.png'))
@section('url', url()->full())
@section('nav_home', 'active')
@section('index_rule', 'noindex , follow')
@section('content')

<!-- 網頁路徑 -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>搜尋</h2>

            <ol>
                {{ Breadcrumbs::render('search') }}&nbsp; {!! $keyword !!} 的結果
            </ol>
        </div>
    </div>
</section>
<!-- 網頁路徑 -->


<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 entries">
                <article class="entry entry-single">

                    <div class="entry-content">
                        @if($post_results !== '')
                            <h3>包含：<font color="blue">{{ $keyword }}</font>&nbsp;的文章</h3>
                            @foreach($post_results as $post)
                                <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                {{ $post->introtext }}
                            @endforeach

                            <div class="blog-pagination">
                                <ul class="justify-content-center">{{ $post_results->links() }}</ul>
                            </div>
                        @else
                            <h3>找不到與 &nbsp;{{ $keyword }} 有關的文章。</h3>
                        @endif
                    </div>

                    <p>&nbsp</p>

                    <div class="entry-content">
                        @if($tag_results !== '')
                            <h3>有使用 &nbsp;<font color="navy">{{ $keyword }}</font>&nbsp;標籤的文章：</h3>
                            @foreach($tag_results as $tag)
                                <h3><a href="/blog/{{ $tag->slug }}">{{ $tag->title }}</a></h3>
                                {{ $tag->introtext }}
                            @endforeach

                            <div class="blog-pagination">
                                <ul class="justify-content-center">{{ $tag_results->links() }}</ul>
                            </div>
                        @else
                            <h3>找不到與 &nbsp;{{ $keyword }} 有關的標籤。</h3>
                        @endif
                    </div>

                </article><!-- End blog entry -->
            </div><!-- End blog entries list -->
        </div><!-- End blog sidebar -->

    </div>
</section><!-- End Blog Single Section -->
@stop
