<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Response;
use Canvas\Models\Post;
use Inertia\Inertia;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Event;
use Canvas\Events\PostViewed;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(\Illuminate\Http\Request $request)
    {
        // 已发布，按 updated_at 降序
        $posts = Post::published()->orderByDesc('updated_at')->get();

        // 第一个是 featured，其余是列表
        $featured = $posts->first();
        $rest = $posts->skip(1)->values();

        return Inertia::render('Posts/Index', [
            'featured' => $featured ? new PostResource($featured) : null,
            'posts'    => PostResource::collection($rest)->toArray($request),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( Post $post ) : Response
    {
        Event::dispatch( new PostViewed( $post ) );
        return Inertia::render( 'Posts/Show', [ 'post' => new PostResource( $post ) ] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
