<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCnotroller extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }

}
