{!! HCaptcha::renderJs('zh-TW') !!}
<div class="blog-comments">
    @if($post->comments->count() == 0)
        <h4  class="comments-count">看完文章有什麼想法嗎？利用下面表單告訴作者吧！</h4>
    @else
        <h4 class="comments-count">{{ $post->comments->count() }} 則回應</h4>
    @endif

    @foreach($with_comments as $with_comment)
    <div class="comment">
        <div class="d-flex">
            <div class="comment-img"><img src="{{ asset('img/comment_user.png') }}" alt=""></div>
            <div>
                @if($with_comment->website != '')
                    <h5><a href="{{ $with_comment->website }}" target="_blank">{{ $with_comment->name }}</a>
                        @if(session()->has('role_id') && session('role_id') == 1)
                            &nbsp;&nbsp;<a href="/comment/{{ $with_comment->id }}" onClick="return confirm('確定要刪除嗎？')">刪除</a>
                        @endif
                    </h5>
                @else
                    <h5>{{ $with_comment->name }}
                        @if(session()->has('role_id') && session('role_id') == 1)
                            &nbsp;&nbsp;<a href="/comment/{{ $with_comment->id }}" onClick="return confirm('確定要刪除嗎？')">刪除</a>
                        @endif
                    </h5>
                @endif
                <time datetime="{{ $with_comment->created_at->toDateTimeString() }}">{{ $with_comment->created_at->diffForHumans() }}</time>
                <p>
                    {!! $with_comment->comment !!}
                </p>
            </div>
        </div>
    </div>
    @if($with_comment->admin_reply != '')
        <div class="comment-reply">
            <div class="d-flex">
                <div class="comment-img"><img src="{{ asset('img/admin_reply.png') }}" alt="管理者回覆"></div>
                <div>
                    <h5>管理者回覆</h5>
                    <p>
                        {!! $with_comment->admin_reply !!}
                    </p>
                </div>
            </div>
        </div>
    @endif
    @endforeach

    <div class="reply-form">
        <h4>張貼回應</h4>
        <p>請先閱讀<a href="/term">服務條款</a>及<a href="/privacy-policy">隱私權政策</a>，送出回應意即同意前述文件。標記 * 欄位請務必填寫，電子郵件信箱不會顯示</p>
        <form action="/comment/add/{{$post->slug}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="你的名字*">
                </div>
                <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="電子郵件*">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="網站網址，請加上 http:// 或 https://">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <textarea name="comment" rows="4" class="form-control" placeholder="回應內容*"></textarea>
                </div>
            </div>
            {!! HCaptcha::display() !!}
            <button type="submit" class="btn btn-primary">張貼回應</button>
        </form>
    </div>
</div><!-- End blog comments -->
