<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSectionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{	
		DB::table('about_sections')->truncate();

		DB::table('about_sections')->insert([
			[
				'title' 	 => 'First Section Title',
				'subtitle' 	 => 'First Section Subtitle',
				'content' 	 => 'First Section Content',
				'image' 	 => '/fonts/section.svg',
				'order' 	 => 1,
				'created_at' => Carbon::now()
			],
			[
				'title' 	 => 'Second Section Title',
				'subtitle' 	 => 'Second Section Subtitle',
				'content' 	 => 'Second Section Content',
				'image' 	 => null,
				'order' 	 => 2,
				'created_at' => Carbon::now()
			]
		]);
	}
}
