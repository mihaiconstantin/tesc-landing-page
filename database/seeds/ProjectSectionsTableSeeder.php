<?php

use Illuminate\Database\Seeder;

class ProjectSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_sections')->delete();
        
        \DB::table('project_sections')->insert(array (
            0 => 
            array (
                'title' => 'Featured 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
            'link' => 'praesent-tristique-gravida-ligula-(featured)',
                'featured' => '1',
                'display' => '1',
                'order' => '1',
                'created_at' => NULL,
                'updated_at' => '2018-02-09 11:14:11',
            ),
            1 => 
            array (
                'title' => 'Featured 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
            'link' => 'praesent-tristique-gravida-ligula-(featured)',
                'featured' => '1',
                'display' => '1',
                'order' => '2',
                'created_at' => NULL,
                'updated_at' => '2018-02-09 11:14:14',
            ),
            2 => 
            array (
                'title' => 'Regular 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
                'link' => 'donec-cursus-diam-at-libero-egestas-varius',
                'featured' => '0',
                'display' => '1',
                'order' => '3',
                'created_at' => NULL,
                'updated_at' => '2018-02-09 11:13:02',
            ),
            3 => 
            array (
                'title' => 'Regular 2',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
                'link' => 'donec-cursus-diam-at-libero-egestas-varius',
                'featured' => '0',
                'display' => '1',
                'order' => '4',
                'created_at' => NULL,
                'updated_at' => '2018-02-09 11:12:52',
            ),
            4 => 
            array (
                'title' => 'Regular 3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eos labore officiis repellat sapiente veniam voluptatem? Consectetur dicta eveniet ipsa magnam maxime! Atque dignissimos, earum ipsa laboriosam quibusdam ratione sed?',
                'link' => 'donec-cursus-diam-at-libero-egestas-varius',
                'featured' => '0',
                'display' => '1',
                'order' => '5',
                'created_at' => NULL,
                'updated_at' => '2018-02-09 11:12:55',
            ),
        ));
        
        
    }
}