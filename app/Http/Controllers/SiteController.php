<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SiteController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;
//        $post_results = Post::search($keyword)->paginate(10);
        $post_results = Post::search($keyword);
        if($post_results == null)
        {
            $post_results = '';
        }else{
            $post_results = $post_results->orderBy('created_at', 'desc')->paginate(20);
        }

        $tag_results = Tag::search($keyword)->first();
        if($tag_results == null)
        {
            $tag_results = '';
        }else{
            $tag_results = $tag_results->posts()->paginate(20);
        }
//        dd($post_results);
        return view('search', compact('keyword', 'post_results', 'tag_results'));
    }

    public function createSitemap()
    {
        SitemapGenerator::create('https://larablog.abokuo.com')->writeToFile(public_path('sitemap.xml'));
    }

}
