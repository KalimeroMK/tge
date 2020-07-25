<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::with('author', 'tags')->orderBy('id', 'desc')->paginate(12);
        return view('main.index', compact('post'));
    }

    public function article($slug)
    {
        $post = Post::whereSlug($slug)->first();
        $slider = Gallery::wherePostId($post->id)->get();
        return view('main.article', compact('post', 'slider'));
    }

    public function categories($slug)
    {
        $category = Category::whereSlug($slug)->first();
        $post = cache()->remember('post', 60 * 60, function () use ($category) {
            return Post::whereHas('categories', function ($q) use ($category) {
                $q->where($slug, '=', $category->slug);
            })->get();
        });
        return view('main.categories', compact('post', 'category'));
    }

    public function eparhija($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $eparhija = Eparhija::all();
        if ($slug == "all") {
            $allcategories = Category::get();
            $categories = Category::roots()->get();
            $tree = Category::getTreeHP($categories);
            $staticpages = StaticPage::all();
            $data = ["eparhija" => $eparhija, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
            return view('main.alleparhija')->with($data);
        } else {
            $category = Category::where('slug', '=', $slug)->first();
            $eparhija = Eparhija::where('slug', '=', $slug)->first();
        }

        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["eparhija" => $eparhija, "category" => $category, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
        return view('main.eparhija')->with($data);
    }

    public function tekstovi($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $tekstovi = Tekstovi::orderBy('id', 'desc')->get();
        if ($slug == "all") {
            $allcategories = Category::get();
            $categories = Category::roots()->get();
            $tree = Category::getTreeHP($categories);
            $staticpages = StaticPage::all();
            $data = ["tekstovi" => $tekstovi, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
            return view('main.alltekstovi')->with($data);
        } else {
            $category = Category::where('slug', '=', $slug)->first();
            $tekstovi = Tekstovi::where('slug', '=', $slug)->first();
        }

        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["tekstovi" => $tekstovi, "category" => $category, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
        return view('main.tekstovi')->with($data);
    }

    public function ogledalo($slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $ogledalo = Ogledalo::where("slug", "=", $slug)->first();
        $ogledalos = Ogledalo::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = Category::get();
        $data = ["settings" => $settings, "services" => $services, "ogledalo" => $ogledalo, "ogledalos" => $ogledalos, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.staticpage')->with($data);
    }

    public function story($id)
    {
        $settings = Settings::firstOrFail();
        $story = Product::where("id", "=", $id)->first();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $data = ["settings" => $settings, "story" => $story, "categories" => $categories, "tree" => $tree];

        return view('main.story')->with($data);
    }
}
