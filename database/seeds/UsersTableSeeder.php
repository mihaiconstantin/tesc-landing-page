<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => '$2y$10$jpKSzOl8l1GCSBwuyl/NkO/xPwlMatoXg.Up3BqarV6hmh2sltcRG',
                'remember_token' => NULL,
                'created_at' => '2018-02-02 17:41:41',
                'updated_at' => '2018-02-08 19:47:32',
                'avatar' => 'users/default.png',
                'role_id' => '1',
            ),
            1 => 
            array (
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => '$2y$10$QbpNRpPqUaOXlImsWn9KfuSvHfcNi13agS6h3e/Ya6/S27tTnKikq',
                'remember_token' => NULL,
                'created_at' => '2018-02-06 12:06:27',
                'updated_at' => '2018-02-08 19:47:14',
                'avatar' => 'users/default.png',
                'role_id' => '2',
            ),
        ));
        
        
    }
}