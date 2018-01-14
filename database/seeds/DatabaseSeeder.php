<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutSectionsTableSeeder::class);
        $this->call(CarouselSectionsTableSeeder::class);
        $this->call(PeopleSectionsTableSeeder::class);
        $this->call(ProjectSectionsTableSeeder::class);
    }
}
