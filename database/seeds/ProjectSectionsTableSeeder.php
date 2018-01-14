<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class ProjectSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_sections')->truncate();

        // Featured.
        DB::table('project_sections')->insert([
        	[
        		'title' 	=> 'Featured 1',
				'content' 	=> 'Featured 1 Content',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 1,
				'display' 	=> 1,
				'order' 	=> 1
			],
			[
				'title' 	=> 'Featured 2',
				'content' 	=> 'Featured 2 Content',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 1,
				'display' 	=> 1,
				'order' 	=> 2
			]
        ]);

        // Regular.
		DB::table('project_sections')->insert([
			[
				'title' 	=> 'Regular 1',
				'content' 	=> 'Regular 1 Content',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 0,
				'display' 	=> 1,
				'order' 	=> 1
			],
			[
				'title' 	=> 'Regular 2',
				'content' 	=> 'Regular 2 Content',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 0,
				'display' 	=> 1,
				'order' 	=> 2
			],
			[
				'title' 	=> 'Regular 3',
				'content' 	=> 'Regular 3 Content',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 0,
				'display' 	=> 1,
				'order' 	=> 3
			]
        ]);
    }
}
