<h3 class="sidebar-title">近期回應</h3>
<div class="sidebar-item recent-posts">
    @foreach($recent_comments as $recent_comment)
        <div class="post-item clearfix">
            {{ $recent_comment->name }}&nbsp;說：<font color="grey">{!! substr($recent_comment->comment, 0, 50) !!}</font><br />
            <i><font size="-1" color="grey">{{ $recent_comment->created_at->diffForHumans() }}</font></i>
            在&nbsp;<a href="/blog/{{ $recent_comment->post->slug }}#comments">{{ $recent_comment->post->title }}</a>
        </div>
    @endforeach
</div>
