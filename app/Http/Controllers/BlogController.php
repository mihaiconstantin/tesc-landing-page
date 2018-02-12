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
		return view('blog');
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
        $next = Post::pickNext($post->category->id, $post->slug);
        $post->next = $next;
        return view('post', compact('post'));
    }


    /**
     * Show the posts associated with a give user id.
     *
     * @param  int      $id The user id.
     * @return Response
     */
    public function author($id)
    {
        return view('blog');
    }


    /**
     * Show the posts within a given category, identified by slug.
     *
     * @param  string   $slug The category slug.
     * @return Response
     */
    public function category($slug)
    {
        return view('blog');
    }

}
