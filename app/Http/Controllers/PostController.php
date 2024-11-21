<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        $firstPost = Post::where('status', 'published')->with('author')->first();

        $posts = Post::with(['author'])
            ->where('status', 'published')
            ->latest()
            ->simplePaginate(9);

        return view('posts.index', compact(['firstPost', 'posts']));
    }

    public function show(): Factory|View|Application
    {
        $post = Post::with('author')
        ->where('status', 'published')
        ->where('slug', request()->slug)
        ->firstOrFail();

        return view('posts.show', compact(['post']));
    }

    public function author(User $author): Factory|View|Application
    {
        $postsToShow = Post::with(['author'])
            ->where('author_id', $author->id)
            ->where('status', 'published')
            ->latest()
            ->get();

        return view('posts.author', compact('author', 'postsToShow'));
    }
}
