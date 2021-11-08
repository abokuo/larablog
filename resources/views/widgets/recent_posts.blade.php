<h3 class="sidebar-title">近期文章</h3>
<div class="sidebar-item recent-posts">
    @foreach($recent_articles as $recent_article)
    <div class="post-item clearfix">
        <img src="{{ Voyager::image($recent_article->cover_image) }}" alt="{{ $recent_article->title }}">
        <h4><a href="/blog/{{ $recent_article->slug }}">{{ $recent_article->title }}</a></h4>
        <time datetime="{{ $recent_article->created_at->toDateString() }}">{{ $recent_article->created_at->toDateString() }}</time>
    </div>
    @endforeach
</div>
