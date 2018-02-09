<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'description' => '',
                'generate_permissions' => '1',
                'created_at' => '2018-02-02 17:41:22',
                'updated_at' => '2018-02-02 17:41:22',
                'server_side' => '0',
                'controller' => '',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
            ),
            1 => 
            array (
                'id' => '3',
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'description' => '',
                'generate_permissions' => '1',
                'created_at' => '2018-02-02 17:41:22',
                'updated_at' => '2018-02-02 17:41:22',
                'server_side' => '0',
                'controller' => '',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
            ),
            2 => 
            array (
                'id' => '4',
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'description' => '',
                'generate_permissions' => '1',
                'created_at' => '2018-02-02 17:41:22',
                'updated_at' => '2018-02-02 17:41:22',
                'server_side' => '0',
                'controller' => '',
                'policy_name' => NULL,
            ),
            3 => 
            array (
                'id' => '5',
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'description' => '',
                'generate_permissions' => '1',
                'created_at' => '2018-02-02 17:41:22',
                'updated_at' => '2018-02-02 17:41:22',
                'server_side' => '0',
                'controller' => '',
                'policy_name' => NULL,
            ),
            4 => 
            array (
                'id' => '6',
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'description' => '',
                'generate_permissions' => '1',
                'created_at' => '2018-02-02 17:41:22',
                'updated_at' => '2018-02-02 17:41:22',
                'server_side' => '0',
                'controller' => '',
                'policy_name' => NULL,
            ),
            5 => 
            array (
                'id' => '7',
                'name' => 'about_sections',
                'slug' => 'about-sections',
                'display_name_singular' => 'About Section',
                'display_name_plural' => 'About Sections',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\AboutSection',
                'description' => 'Edit the content visible in the `About` section on the landing page.',
                'generate_permissions' => '1',
                'created_at' => '2018-02-06 09:45:16',
                'updated_at' => '2018-02-06 10:30:02',
                'server_side' => '0',
                'controller' => NULL,
                'policy_name' => NULL,
            ),
            6 => 
            array (
                'id' => '9',
                'name' => 'people_sections',
                'slug' => 'people-sections',
                'display_name_singular' => 'People Section',
                'display_name_plural' => 'People Sections',
                'icon' => 'voyager-people',
                'model_name' => 'App\\PeopleSection',
                'description' => 'Edit the content visible in the `People` section on the landing page.',
                'generate_permissions' => '1',
                'created_at' => '2018-02-06 10:47:04',
                'updated_at' => '2018-02-06 10:47:04',
                'server_side' => '0',
                'controller' => NULL,
                'policy_name' => NULL,
            ),
            7 => 
            array (
                'id' => '10',
                'name' => 'project_sections',
                'slug' => 'project-sections',
                'display_name_singular' => 'Project Section',
                'display_name_plural' => 'Project Sections',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\ProjectSection',
                'description' => 'Edit the content visible in the `Projects` section on the landing page.',
                'generate_permissions' => '1',
                'created_at' => '2018-02-06 10:55:40',
                'updated_at' => '2018-02-06 10:55:40',
                'server_side' => '0',
                'controller' => NULL,
                'policy_name' => NULL,
            ),
            8 => 
            array (
                'id' => '11',
                'name' => 'carousel_sections',
                'slug' => 'carousel-sections',
                'display_name_singular' => 'Carousel Section',
                'display_name_plural' => 'Carousel Sections',
                'icon' => 'voyager-photos',
                'model_name' => 'App\\CarouselSection',
                'description' => 'Edit the content visible in the `Carousel` section on the landing page.',
                'generate_permissions' => '1',
                'created_at' => '2018-02-06 11:04:54',
                'updated_at' => '2018-02-06 11:05:58',
                'server_side' => '0',
                'controller' => NULL,
                'policy_name' => NULL,
            ),
            9 => 
            array (
                'id' => '12',
                'name' => 'subscriptions',
                'slug' => 'subscriptions',
                'display_name_singular' => 'Subscription',
                'display_name_plural' => 'Subscriptions',
                'icon' => 'voyager-sound',
                'model_name' => 'App\\Subscription',
                'description' => 'Subscribed people. Edit wisely as you directly affect the internal balance of the subscribers.',
                'generate_permissions' => '1',
                'created_at' => '2018-02-06 11:10:45',
                'updated_at' => '2018-02-06 11:11:22',
                'server_side' => '1',
                'controller' => NULL,
                'policy_name' => NULL,
            ),
            10 => 
            array (
                'id' => '13',
                'name' => 'contact_messages',
                'slug' => 'contact-messages',
                'display_name_singular' => 'Contact Message',
                'display_name_plural' => 'Contact Messages',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\ContactMessage',
                'description' => 'Contact messages submitted via the form on the landing page.',
                'generate_permissions' => '1',
                'created_at' => '2018-02-06 11:15:51',
                'updated_at' => '2018-02-06 11:15:51',
                'server_side' => '1',
                'controller' => NULL,
                'policy_name' => NULL,
            ),
        ));
        
        
    }
}