<?php // routes/breadcrumbs.php
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('首頁', route('home'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('建置日誌', route('blog'));
});

// Home > Blog > Post title
Breadcrumbs::for('post', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('post', $post));
});

// Home > Single article
Breadcrumbs::for('single', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('home');
    $trail->push($post->title, route('single', $post));
});


// Home > About
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('關於我', route('about'));
});

// Home > Resource
Breadcrumbs::for('resources', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('資源連結', route('resources'));
});

// Home > Search
Breadcrumbs::for('search', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('搜尋', route('search'));
});


// Home > Login
Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('前台登入', route('login'));
});

?>
