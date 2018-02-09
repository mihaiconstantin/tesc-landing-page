<?php

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscriptions')->delete();
        
        \DB::table('subscriptions')->insert(array (
            0 => 
            array (
                'email' => 'c.tinmihai@ymail.com',
                'token' => 'sVcNFyBV9n26dTkHMmYuFFOvK3xQN5UlHRwJIaEJ3YyjQCEdlT',
                'verified' => '0',
                'active' => '1',
                'ip' => '127.0.0.1',
                'created_at' => '2018-02-09 00:04:58',
                'updated_at' => '2018-02-09 00:04:58',
            ),
        ));
        
        
    }
}