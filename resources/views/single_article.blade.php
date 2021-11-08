@extends('layouts.master')
@section('meta_description', $post->introtext)
@section('title', $post->title)
@section('cover_image', Voyager::image($post->cover_image))
@section('url', url()->full())
@section('nav_home', 'active')
@section('index_rule', 'noindex , follow')
@section('content')

<!-- ======= Blog Single Section ======= -->
    <!-- 網頁路徑 -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $post->title }}</h2>
                <ol>
                    {{ Breadcrumbs::render('single', $post) }}
                </ol>
            </div>
        </div>
    </section>
    <!-- 網頁路徑 -->


<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12 entries">

                <article class="entry entry-single">

                    <div class="entry-content">
                        {!! \Illuminate\Support\Str::markdown($post->content) !!}
                    </div>

                </article><!-- End blog entry -->


            </div><!-- End blog entries list -->


        </div><!-- End blog sidebar -->

</div>
</section><!-- End Blog Single Section -->
@stop
