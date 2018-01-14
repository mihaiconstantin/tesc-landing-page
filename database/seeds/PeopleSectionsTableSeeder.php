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
				'description'	=> 'First Founder Description',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'founder1@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'founder',
				'order' 		=> 1,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Second Founder',
				'description'	=> 'Second Founder Description',
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
				'description'	=> 'Employee 1 Description',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee1@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 1,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 2',
				'description'	=> 'Employee 2 Description',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee2@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 2,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 3',
				'description'	=> 'Employee 3 Description',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee3@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 3,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 4',
				'description'	=> 'Employee 4 Description',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee4@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 4,
				'created_at' 	=> Carbon::now()
			],
			[
				'name'			=> 'Employee 5',
				'description'	=> 'Employee 5 Description',
				'link'			=> 'https://www.uvt.nl',
				'email'			=> 'employee5@email.com',
				'image' 		=> '/images/person.png',
				'role' 			=> 'employee',
				'order' 		=> 5,
				'created_at' 	=> Carbon::now()
			],
		]);
    }
}
