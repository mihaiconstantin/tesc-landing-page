<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{
	
    /**
     * Show all posts (i.e., blog home).
     *
     * @param  string  $slug
     * @return Response
     */
	public function index() 
	{
		return 'Blog home page.';
	}



    /**
     * Show a post based on a given slug.
     *
     * @param  string  $slug
     * @return Response
     */
    public function post($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();        
        // Checkf the post category & pick the next post (by date) from within that category.
        return view('post', compact('post'));
    }
}
