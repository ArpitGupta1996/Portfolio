<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function allpost(){
        $all_post = Post::all();

        return response()->json($all_post);
    }
}
