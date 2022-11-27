<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $likedPost = Post::withCount('likedUser')->orderBy('liked_user_count', 'DESC')->get()->take(10);
        return view('post.index', compact('posts', 'likedPost'));
    }
}
