<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeopleSection;
use App\Page;


class PageController extends Controller
{

	/**
	 * Will take a page slug and render the appropriate view with the data created
	 * using the admin interface (i.e., each row in the pages table is a page).
	 *
	 * @param $slug
	 * @return string
	 */
	public function index($slug)
    {
		abort(404);
    	// $page = Page::where('slug', '=', $slug)->firstOrFail();
		// return view('pages.index', compact('page'));
    }



	/**
	 * Render the members page. Not recorded as an entry into the pages table.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function members()
	{
		$members = PeopleSection::activeMembersInRandomOrder();
		return view('pages.members', ['members' => $members]);
	}

}
