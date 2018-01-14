<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class CarouselSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousel_sections')->truncate();
		
		DB::table('carousel_sections')->insert([
			[
				'title' 	 => 'First Carousel Title',
				'content' 	 => 'First Carousel Content',
				'image' 	 => 'https://pbs.twimg.com/profile_banners/845552499155243008/1490631631/1500x500',
				'order' 	 => 1,
				'created_at' => Carbon::now()
			],
			[
				'title' 	 => 'Second Carousel Title',
				'content' 	 => 'Second Carousel Content',
				'image' 	 => 'https://expertfile.com/speakers/img/generic.png',
				'order' 	 => 2,
				'created_at' => Carbon::now()
			]
		]);
    }
}
