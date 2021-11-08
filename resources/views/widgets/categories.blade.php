<h3 class="sidebar-title">文章分類</h3>
<div class="sidebar-item categories">
    <ul>
        @foreach($categories as $category)
            <li><a href="/category/{{ $category->slug }}">{{ $category->name }}
                <span>({{ $category->posts->count() }})</a></li>
        @endforeach
    </ul>
</div>
