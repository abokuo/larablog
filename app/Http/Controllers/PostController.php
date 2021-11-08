<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\UserSocialProfile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use TOC\TocGenerator;
use TOC\MarkupFixer;

class PostController extends Controller
{

    public function renderSinglePage($slug){
        $post = Post::where('slug', $slug)->first();
        return view('single_article', compact('post'));
    }

    public function renderHomePage(){
        $posts = Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->paginate(5);
        $bindings = [
            'categories' => Category::where('status', 'published')->where('featured', 'yes')->get(),
            'tags' => Tag::where('status', 'published')->where('featured', 'yes')->get(),
            'recent_articles' => Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->limit(5)->get(),
            'recent_comments' => Comment::orderBy('created_at', 'desc')->limit(5)->get(),
        ];

        return view('home', $bindings, compact('posts'));
    }

    public function renderBlogIndex(){
        $posts = Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->paginate(5);
        $bindings = [
            'categories' => Category::where('status', 'published')->where('featured', 'yes')->get(),
            'tags' => Tag::where('status', 'published')->where('featured', 'yes')->get(),
            'recent_articles' => Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->limit(5)->get(),
            'recent_comments' => Comment::orderBy('created_at', 'desc')->limit(5)->get(),
        ];

        return view('blog_index', $bindings, compact('posts'));
    }

    public function renderBlogPage($slug){
        $post = Post::where('slug', $slug)->first();
        $post->content = Str::markdown($post->content);
        $markupFixer  = new MarkupFixer();
        $tocGenerator = new TocGenerator();
        $post->content = "<div class='content'>" . $markupFixer->fix($post->content) . "</div>";
        $toc = "<div class='toc'>" . $tocGenerator->getHtmlMenu($post->content, 2, 2) . "</div>";

        $bindings = [
            'previous_post' => Post::where('status', 'published')->where('featured', 'yes')->where('id', '<', $post->id)->orderBy('id', 'desc')->first(),
            'next_post' => Post::where('status', 'published')->where('featured', 'yes')->where('id', '>', $post->id)->orderBy('id', 'asc')->first(),
            'categories' => Category::where('status', 'published')->where('featured', 'yes')->get(),
            'tags' => Tag::where('status', 'published')->where('featured', 'yes')->get(),
            'author_bio' => UserSocialProfile::where('id', $post->user_id)->first(),
            'recent_articles' => Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->limit(5)->get(),
            'recent_comments' => Comment::orderBy('created_at', 'desc')->limit(5)->get(),
        ];
        $with_comments = $post->comments->sortByDesc('created_at');
        return view('blog_page', $bindings,  compact('post', 'toc', 'with_comments'));
    }

    public function renderBlogByCategory($slug){
        $category = Category::where('slug', $slug)->first();
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(5);
        $bindings = [
            'categories' => Category::where('status', 'published')->where('featured', 'yes')->get(),
            'tags' => Tag::where('status', 'published')->where('featured', 'yes')->get(),
            'recent_articles' => Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->limit(5)->get(),
            'recent_comments' => Comment::orderBy('created_at', 'desc')->limit(5)->get(),
        ];
        return view('blog_category', $bindings, compact('posts'));
    }

    public function renderBlogByTag($slug){
        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts()->paginate(5);
        $bindings = [
            'filtered_tag' => $tag->name,
            'comments_count' => Comment::where('post_id','$post->id')->count(),
            'categories' => Category::where('status', 'published')->where('featured', 'yes')->get(),
            'tags' => Tag::where('status', 'published')->where('featured', 'yes')->get(),
            'recent_articles' => Post::where('status', 'published')->where('featured', 'yes')->orderBy('created_at', 'desc')->limit(5)->get(),
            'recent_comments' => Comment::orderBy('created_at', 'desc')->limit(5)->get(),
        ];
        return view('blog_tag', $bindings, compact('posts'));
    }

}
