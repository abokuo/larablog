<h3 class="sidebar-title">標籤雲</h3>
<div class="sidebar-item tags">
  <ul>
    @foreach ($tags as $tag)
        <li><a href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a></li>
    @endforeach
  </ul>
</div>
