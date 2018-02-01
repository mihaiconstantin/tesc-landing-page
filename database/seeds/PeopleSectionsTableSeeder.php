<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class PeopleSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_sections')->truncate();

        // Founders.
		DB::table('people_sections')->insert([
			[
				'name'			=> 'First Founder',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magnam, minima molestiae obcaecati quas quis totam voluptas voluptates? Consequuntur illo magnam natus quae sunt temporibus totam ullam veniam.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'founder1@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'founder',
				'order' 		=> 1,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Second Founder',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magnam, minima molestiae obcaecati quas quis totam voluptas voluptates? Consequuntur illo magnam natus quae sunt temporibus totam ullam veniam.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'founder2@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'founder',
				'order' 		=> 2,
				'created_at' 	=> Carbon::now()
			],
		]);

		// Employees.
		DB::table('people_sections')->insert([
			[
				'name'			=> 'Employee 1',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee1@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 3,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 2',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee2@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 4,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 3',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee3@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 5,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 4',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee4@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 6,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 5',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee5@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 7,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 6',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee6@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 8,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 7',
				'description'	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee7@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 9,
				'created_at' 	=> Carbon::now()
			],
		]);
    }
}
