<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'admin',
                'created_at' => '2018-02-02 17:41:22',
                'updated_at' => '2018-02-02 17:41:22',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'user',
                'created_at' => '2018-02-06 11:37:49',
                'updated_at' => '2018-02-06 11:49:42',
            ),
        ));
        
        
    }
}