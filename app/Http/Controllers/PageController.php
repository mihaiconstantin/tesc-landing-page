<?php
// TODO: If more pages are needed, switch to the `TCG\Voyager\Models\Page` model for management.

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeopleSection;

class PageController extends Controller
{
    public function members()
    {
        $members = PeopleSection::activeMembers();
        // return $members;
        return view('pages.members', $members);
    }
}
