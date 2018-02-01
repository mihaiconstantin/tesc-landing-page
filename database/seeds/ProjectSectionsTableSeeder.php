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
				'content' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 1,
				'display' 	=> 1,
				'order' 	=> 1
			],
			[
				'title' 	=> 'Featured 2',
				'content' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
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
				'content' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 0,
				'display' 	=> 1,
				'order' 	=> 3
			],
			[
				'title' 	=> 'Regular 2',
				'content' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 0,
				'display' 	=> 1,
				'order' 	=> 4
			],
			[
				'title' 	=> 'Regular 3',
				'content' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
				'link' 		=> 'https://uvt.nl',
				'featured' 	=> 0,
				'display' 	=> 1,
				'order' 	=> 5
			]
        ]);
    }
}
