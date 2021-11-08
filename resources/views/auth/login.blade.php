<!-- 繼承主版 -->
@extends('layouts.master')
@section('meta_description', '管理者登入頁面')
@section('title', '管理者登入頁面')
@section('index_rule', 'noindex , nofollow')
@section('content')

<!-- 主要內容 -->
@section('content')

<!-- 網頁路徑 -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <ol>
                {{ Breadcrumbs::render('login') }}
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
                        <!-- 錯誤訊息顯示 -->
                        @include('auth.validationErrorMessage')
                        <form action="/auth/login" method="POST" class="reply-form">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label>你的電郵：
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                                    </label><br />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>你的密碼：
                                        <input type="password" name="password" class="form-control">
                                    </label><br />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">登入</button>
                        </form>
                    </div>
                </article>
            </div><!-- End blog entries list -->
        </div><!-- End blog sidebar -->
    </div>
</section>
@stop
