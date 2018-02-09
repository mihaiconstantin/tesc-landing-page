<?php

use Illuminate\Database\Seeder;

class PeopleSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('people_sections')->delete();
        
        \DB::table('people_sections')->insert(array (
            0 => 
            array (
                'name' => 'First Founder',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magnam, minima molestiae obcaecati quas quis totam voluptas voluptates? Consequuntur illo magnam natus quae sunt temporibus totam ullam veniam.',
                'email' => 'founder1@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/Z9UyVo1yp1Ww5KNkc5u3.jpg',
                'role' => 'founder',
                'display' => '1',
                'order' => '1',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:29:37',
            ),
            1 => 
            array (
                'name' => 'Second Founder',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magnam, minima molestiae obcaecati quas quis totam voluptas voluptates? Consequuntur illo magnam natus quae sunt temporibus totam ullam veniam.',
                'email' => 'founder2@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/9gz0DiXbAm7VMCY1HUIl.jpg',
                'role' => 'founder',
                'display' => '1',
                'order' => '2',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:32:14',
            ),
            2 => 
            array (
                'name' => 'Employee 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee1@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/95ycBZjiWH72UwqToqDO.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '3',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:32:46',
            ),
            3 => 
            array (
                'name' => 'Employee 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee2@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/eeSfRMRT6EpzqbUYyFnn.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '4',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:32:53',
            ),
            4 => 
            array (
                'name' => 'Employee 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee3@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/MozvbiThbAixp2vAr12O.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '5',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:32:58',
            ),
            5 => 
            array (
                'name' => 'Employee 4',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee4@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/If4PdsAPCX1omHmbpRdM.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '6',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:33:03',
            ),
            6 => 
            array (
                'name' => 'Employee 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee5@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/s0fmAOFZRmlc5E0ayycz.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '7',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:33:08',
            ),
            7 => 
            array (
                'name' => 'Employee 6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee6@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/YPgO0zVqL8BvgowUJKZe.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '8',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:33:13',
            ),
            8 => 
            array (
                'name' => 'Employee 7',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio et facilis magna.',
                'email' => 'employee7@email.com',
                'link' => 'https://www.uvt.nl',
                'image' => 'people-sections/February2018/N9tkZiFgjdqqZ9w6IYyL.png',
                'role' => 'employee',
                'display' => '1',
                'order' => '9',
                'created_at' => '2018-02-02 17:41:20',
                'updated_at' => '2018-02-06 22:33:19',
            ),
        ));
        
        
    }
}