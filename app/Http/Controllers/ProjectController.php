<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class ProjectController extends Controller
{
    /**
     * Show the project based on a given slug.
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();        
        return view('project', compact('post'));
    }
}