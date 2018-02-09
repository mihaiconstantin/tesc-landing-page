<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => '1',
                'parent_id' => NULL,
                'order' => '1',
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
                'created_at' => '2018-02-03 10:29:30',
                'updated_at' => '2018-02-06 12:15:44',
            ),
            1 => 
            array (
                'id' => '2',
                'parent_id' => NULL,
                'order' => '2',
                'name' => 'Projects',
                'slug' => 'projects',
                'created_at' => '2018-02-03 10:29:30',
                'updated_at' => '2018-02-06 12:14:56',
            ),
        ));
        
        
    }
}