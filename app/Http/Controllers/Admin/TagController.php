<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\Store;
use App\Models\PostTag;
use App\Models\Tag;
use App\Traits\SlugCreate;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Session;

class TagController extends Controller
{
    use SlugCreate;

    /**
     * TagController constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:tags-list');
        $this->middleware('permission:tags-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:tags-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:tags-delete', ['only' => ['destroy']]);
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'asc')->paginate(10);
        foreach ($tags as $t) {
            $t->post_count = PostTag::where('tag_id', $t->id)->count();
        }
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * @return Application|Factory|View\
     */
    public function create()
    {
        $tag = new Tag();
        return view('admin.tags.create', compact('tag'));
    }

    /**
     * @param Store $request
     * @return string
     */
    public function store(Store $request)
    : string {
        $slug = $this->createSlug($request);
        Tag::create($slug);
        return redirect()->route('tags.index');
    }

    /**
     * @param Tag $tag
     * @return string
     * @throws Exception
     */

    public function destroy(Tag $tag)
    : string {
        $tag->posts()->detach();
        $tag->delete();
        Session::flash('success_msg', trans('messages.tag_deleted_success'));
        return redirect()->back();
    }
}
