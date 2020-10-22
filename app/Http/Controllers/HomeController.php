<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::with('author', 'tags')->orderBy('id', 'desc')->paginate(12);
        return view('main.index', compact('post'));
    }

    public function article($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        $slider = Gallery::wherePostId($post->id)->get();
        return view('main.article', compact('post', 'slider'));
    }

    public function categories($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();
        $post = cache()->remember(
            'post',
            60 * 60,
            function () use ($slug, $category) {
                return Post::whereHas(
                    'categories',
                    function ($q) use ($slug, $category) {
                        $q->where($slug, '=', $category->slug);
                    }
                )->get();
            }
        );
        return view('main.categories', compact('post', 'category'));
    }


    public function story($id)
    {
        $story = Post::whereId($id)->firstOrFail();
        return view('main.story', compact('story'));
    }
}
