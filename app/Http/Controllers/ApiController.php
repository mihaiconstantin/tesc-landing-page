<?php

namespace App\Http\Controllers;

use App\CarouselSection;
use App\AboutSection;
use App\PeopleSection;
use App\ProjectSection;
use App\ContactMessage;
use App\Post;
use App\Category;
use Illuminate\Http\Request;


class ApiController extends Controller
{
	/**
	 * Fetch the data for all sections on the landing page at once.
	 *
	 * @return array
     */
	public function landingPage()
	{
		try {
			$siteSettingsVoyager = array(
				'navbar_logo' 		=> setting('site.navbar_logo'),
				'footer_logo' 		=> setting('site.footer_logo'),
				'terms_conditions' 	=> setting('site.terms_conditions'),
				'privacy_policy' 	=> setting('site.privacy_policy')
			);
		} catch (\Exception $e) {
			$siteSettingsVoyager = $e->getMessage();
		}

		$clientKeys = array(
            'recaptcha' => env('GOOGLE_RECAPTCHA_SITE_KEY'),
            // Other keys to be added here.
        );

		return array(
			'sectionCarousel' 		=> CarouselSection::getActiveRows(),
			'sectionAbout' 			=> AboutSection::getActiveRows(),
			'sectionPeople' 		=> PeopleSection::forLandingPage(),
			'sectionProject' 		=> ProjectSection::getActiveRows(),
			'siteSettingsVoyager'	=> $siteSettingsVoyager,
            'clientKeys'            => $clientKeys
		);
	}



	/**
	 * Fetch all published blog posts.
	 *
	 * @return Post[]
	 */
	public function posts() 
	{
        return Post::allPublished();
	}



    /**
     * Fetch all published blog posts for a given user id.
     *
     * @param $id
     * @return Post[]
     */
	public function author($id)
	{
		return Post::byAuthor($id);
	}



    /**
     * Fetch all published blog posts for a given category slug.
     *
     * @param $slug
     * @return Post[]
     */
	public function category($slug)
	{
		$categoryId = Category::identifySlug($slug);
		return Post::inCategory($categoryId);
	}

}
