<?php

use Illuminate\Database\Seeder;

class ContactMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_messages')->delete();
        
        \DB::table('contact_messages')->insert(array (
            0 => 
            array (
                'from' => 'c.tinmihai@ymail.com',
                'content' => 'Etiam vulputate velit eu augue aliquam dictum. In condimentum urna vitae lorem ullamcorper, vel sagittis quam mattis. Maecenas mollis nisl et lectus venenatis eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'to' => 'Employee 3',
                'inbox' => 'employee3@email.com',
                'cc' => 'founder1@email.com',
                'sent' => '0',
                'created_at' => '2018-02-09 11:17:24',
                'updated_at' => '2018-02-09 11:17:24',
            ),
        ));
        
        
    }
}