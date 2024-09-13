<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            "user_id" => Cookie::get('id'),
            "caption" => $request->caption
        ]);

        return back();
    }
}
