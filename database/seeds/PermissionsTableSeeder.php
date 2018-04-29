<?php
use Illuminate\Database\Seeder;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => '1',
                    'key' => 'browse_admin',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => NULL,
                ),
            1 =>
                array (
                    'id' => '2',
                    'key' => 'browse_database',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => NULL,
                ),
            2 =>
                array (
                    'id' => '3',
                    'key' => 'browse_media',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => NULL,
                ),
            3 =>
                array (
                    'id' => '4',
                    'key' => 'browse_compass',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => NULL,
                ),
            4 =>
                array (
                    'id' => '5',
                    'key' => 'browse_hooks',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => NULL,
                ),
            5 =>
                array (
                    'id' => '6',
                    'key' => 'browse_menus',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'menus',
                ),
            6 =>
                array (
                    'id' => '7',
                    'key' => 'read_menus',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'menus',
                ),
            7 =>
                array (
                    'id' => '8',
                    'key' => 'edit_menus',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'menus',
                ),
            8 =>
                array (
                    'id' => '9',
                    'key' => 'add_menus',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'menus',
                ),
            9 =>
                array (
                    'id' => '10',
                    'key' => 'delete_menus',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'menus',
                ),
            10 =>
                array (
                    'id' => '16',
                    'key' => 'browse_roles',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'roles',
                ),
            11 =>
                array (
                    'id' => '17',
                    'key' => 'read_roles',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'roles',
                ),
            12 =>
                array (
                    'id' => '18',
                    'key' => 'edit_roles',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'roles',
                ),
            13 =>
                array (
                    'id' => '19',
                    'key' => 'add_roles',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'roles',
                ),
            14 =>
                array (
                    'id' => '20',
                    'key' => 'delete_roles',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'roles',
                ),
            15 =>
                array (
                    'id' => '21',
                    'key' => 'browse_users',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'users',
                ),
            16 =>
                array (
                    'id' => '22',
                    'key' => 'read_users',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'users',
                ),
            17 =>
                array (
                    'id' => '23',
                    'key' => 'edit_users',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'users',
                ),
            18 =>
                array (
                    'id' => '24',
                    'key' => 'add_users',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'users',
                ),
            19 =>
                array (
                    'id' => '25',
                    'key' => 'delete_users',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'users',
                ),
            20 =>
                array (
                    'id' => '26',
                    'key' => 'browse_posts',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'posts',
                ),
            21 =>
                array (
                    'id' => '27',
                    'key' => 'read_posts',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'posts',
                ),
            22 =>
                array (
                    'id' => '28',
                    'key' => 'edit_posts',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'posts',
                ),
            23 =>
                array (
                    'id' => '29',
                    'key' => 'add_posts',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'posts',
                ),
            24 =>
                array (
                    'id' => '30',
                    'key' => 'delete_posts',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'posts',
                ),
            25 =>
                array (
                    'id' => '31',
                    'key' => 'browse_categories',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'categories',
                ),
            26 =>
                array (
                    'id' => '32',
                    'key' => 'read_categories',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'categories',
                ),
            27 =>
                array (
                    'id' => '33',
                    'key' => 'edit_categories',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'categories',
                ),
            28 =>
                array (
                    'id' => '34',
                    'key' => 'add_categories',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'categories',
                ),
            29 =>
                array (
                    'id' => '35',
                    'key' => 'delete_categories',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'categories',
                ),
            30 =>
                array (
                    'id' => '36',
                    'key' => 'browse_settings',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'settings',
                ),
            31 =>
                array (
                    'id' => '37',
                    'key' => 'read_settings',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'settings',
                ),
            32 =>
                array (
                    'id' => '38',
                    'key' => 'edit_settings',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => 'settings',
                ),
            33 =>
                array (
                    'id' => '39',
                    'key' => 'add_settings',
                    'created_at' => '2018-02-02 17:41:23',
                    'updated_at' => '2018-02-02 17:41:23',
                    'permission_group_id' => NULL,
                    'table_name' => 'settings',
                ),
            34 =>
                array (
                    'id' => '40',
                    'key' => 'delete_settings',
                    'created_at' => '2018-02-02 17:41:23',
                    'updated_at' => '2018-02-02 17:41:23',
                    'permission_group_id' => NULL,
                    'table_name' => 'settings',
                ),
            35 =>
                array (
                    'id' => '41',
                    'key' => 'browse_about_sections',
                    'created_at' => '2018-02-06 09:45:16',
                    'updated_at' => '2018-02-06 09:45:16',
                    'permission_group_id' => NULL,
                    'table_name' => 'about_sections',
                ),
            36 =>
                array (
                    'id' => '42',
                    'key' => 'read_about_sections',
                    'created_at' => '2018-02-06 09:45:16',
                    'updated_at' => '2018-02-06 09:45:16',
                    'permission_group_id' => NULL,
                    'table_name' => 'about_sections',
                ),
            37 =>
                array (
                    'id' => '43',
                    'key' => 'edit_about_sections',
                    'created_at' => '2018-02-06 09:45:16',
                    'updated_at' => '2018-02-06 09:45:16',
                    'permission_group_id' => NULL,
                    'table_name' => 'about_sections',
                ),
            38 =>
                array (
                    'id' => '44',
                    'key' => 'add_about_sections',
                    'created_at' => '2018-02-06 09:45:16',
                    'updated_at' => '2018-02-06 09:45:16',
                    'permission_group_id' => NULL,
                    'table_name' => 'about_sections',
                ),
            39 =>
                array (
                    'id' => '45',
                    'key' => 'delete_about_sections',
                    'created_at' => '2018-02-06 09:45:16',
                    'updated_at' => '2018-02-06 09:45:16',
                    'permission_group_id' => NULL,
                    'table_name' => 'about_sections',
                ),
            40 =>
                array (
                    'id' => '51',
                    'key' => 'browse_people_sections',
                    'created_at' => '2018-02-06 10:47:04',
                    'updated_at' => '2018-02-06 10:47:04',
                    'permission_group_id' => NULL,
                    'table_name' => 'people_sections',
                ),
            41 =>
                array (
                    'id' => '52',
                    'key' => 'read_people_sections',
                    'created_at' => '2018-02-06 10:47:04',
                    'updated_at' => '2018-02-06 10:47:04',
                    'permission_group_id' => NULL,
                    'table_name' => 'people_sections',
                ),
            42 =>
                array (
                    'id' => '53',
                    'key' => 'edit_people_sections',
                    'created_at' => '2018-02-06 10:47:05',
                    'updated_at' => '2018-02-06 10:47:05',
                    'permission_group_id' => NULL,
                    'table_name' => 'people_sections',
                ),
            43 =>
                array (
                    'id' => '54',
                    'key' => 'add_people_sections',
                    'created_at' => '2018-02-06 10:47:05',
                    'updated_at' => '2018-02-06 10:47:05',
                    'permission_group_id' => NULL,
                    'table_name' => 'people_sections',
                ),
            44 =>
                array (
                    'id' => '55',
                    'key' => 'delete_people_sections',
                    'created_at' => '2018-02-06 10:47:05',
                    'updated_at' => '2018-02-06 10:47:05',
                    'permission_group_id' => NULL,
                    'table_name' => 'people_sections',
                ),
            45 =>
                array (
                    'id' => '56',
                    'key' => 'browse_project_sections',
                    'created_at' => '2018-02-06 10:55:40',
                    'updated_at' => '2018-02-06 10:55:40',
                    'permission_group_id' => NULL,
                    'table_name' => 'project_sections',
                ),
            46 =>
                array (
                    'id' => '57',
                    'key' => 'read_project_sections',
                    'created_at' => '2018-02-06 10:55:40',
                    'updated_at' => '2018-02-06 10:55:40',
                    'permission_group_id' => NULL,
                    'table_name' => 'project_sections',
                ),
            47 =>
                array (
                    'id' => '58',
                    'key' => 'edit_project_sections',
                    'created_at' => '2018-02-06 10:55:40',
                    'updated_at' => '2018-02-06 10:55:40',
                    'permission_group_id' => NULL,
                    'table_name' => 'project_sections',
                ),
            48 =>
                array (
                    'id' => '59',
                    'key' => 'add_project_sections',
                    'created_at' => '2018-02-06 10:55:40',
                    'updated_at' => '2018-02-06 10:55:40',
                    'permission_group_id' => NULL,
                    'table_name' => 'project_sections',
                ),
            49 =>
                array (
                    'id' => '60',
                    'key' => 'delete_project_sections',
                    'created_at' => '2018-02-06 10:55:40',
                    'updated_at' => '2018-02-06 10:55:40',
                    'permission_group_id' => NULL,
                    'table_name' => 'project_sections',
                )
        ));
        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => '61',
                    'key' => 'browse_carousel_sections',
                    'created_at' => '2018-02-06 11:04:54',
                    'updated_at' => '2018-02-06 11:04:54',
                    'permission_group_id' => NULL,
                    'table_name' => 'carousel_sections',
                ),
            1 =>
                array (
                    'id' => '62',
                    'key' => 'read_carousel_sections',
                    'created_at' => '2018-02-06 11:04:54',
                    'updated_at' => '2018-02-06 11:04:54',
                    'permission_group_id' => NULL,
                    'table_name' => 'carousel_sections',
                ),
            2 =>
                array (
                    'id' => '63',
                    'key' => 'edit_carousel_sections',
                    'created_at' => '2018-02-06 11:04:54',
                    'updated_at' => '2018-02-06 11:04:54',
                    'permission_group_id' => NULL,
                    'table_name' => 'carousel_sections',
                ),
            3 =>
                array (
                    'id' => '64',
                    'key' => 'add_carousel_sections',
                    'created_at' => '2018-02-06 11:04:54',
                    'updated_at' => '2018-02-06 11:04:54',
                    'permission_group_id' => NULL,
                    'table_name' => 'carousel_sections',
                ),
            4 =>
                array (
                    'id' => '65',
                    'key' => 'delete_carousel_sections',
                    'created_at' => '2018-02-06 11:04:54',
                    'updated_at' => '2018-02-06 11:04:54',
                    'permission_group_id' => NULL,
                    'table_name' => 'carousel_sections',
                ),
            5 =>
                array (
                    'id' => '66',
                    'key' => 'browse_subscriptions',
                    'created_at' => '2018-02-06 11:10:45',
                    'updated_at' => '2018-02-06 11:10:45',
                    'permission_group_id' => NULL,
                    'table_name' => 'subscriptions',
                ),
            6 =>
                array (
                    'id' => '67',
                    'key' => 'read_subscriptions',
                    'created_at' => '2018-02-06 11:10:45',
                    'updated_at' => '2018-02-06 11:10:45',
                    'permission_group_id' => NULL,
                    'table_name' => 'subscriptions',
                ),
            7 =>
                array (
                    'id' => '68',
                    'key' => 'edit_subscriptions',
                    'created_at' => '2018-02-06 11:10:45',
                    'updated_at' => '2018-02-06 11:10:45',
                    'permission_group_id' => NULL,
                    'table_name' => 'subscriptions',
                ),
            8 =>
                array (
                    'id' => '69',
                    'key' => 'add_subscriptions',
                    'created_at' => '2018-02-06 11:10:45',
                    'updated_at' => '2018-02-06 11:10:45',
                    'permission_group_id' => NULL,
                    'table_name' => 'subscriptions',
                ),
            9 =>
                array (
                    'id' => '70',
                    'key' => 'delete_subscriptions',
                    'created_at' => '2018-02-06 11:10:45',
                    'updated_at' => '2018-02-06 11:10:45',
                    'permission_group_id' => NULL,
                    'table_name' => 'subscriptions',
                ),
            10 =>
                array (
                    'id' => '71',
                    'key' => 'browse_contact_messages',
                    'created_at' => '2018-02-06 11:15:51',
                    'updated_at' => '2018-02-06 11:15:51',
                    'permission_group_id' => NULL,
                    'table_name' => 'contact_messages',
                ),
            11 =>
                array (
                    'id' => '72',
                    'key' => 'read_contact_messages',
                    'created_at' => '2018-02-06 11:15:51',
                    'updated_at' => '2018-02-06 11:15:51',
                    'permission_group_id' => NULL,
                    'table_name' => 'contact_messages',
                ),
            12 =>
                array (
                    'id' => '73',
                    'key' => 'edit_contact_messages',
                    'created_at' => '2018-02-06 11:15:51',
                    'updated_at' => '2018-02-06 11:15:51',
                    'permission_group_id' => NULL,
                    'table_name' => 'contact_messages',
                ),
            13 =>
                array (
                    'id' => '74',
                    'key' => 'add_contact_messages',
                    'created_at' => '2018-02-06 11:15:51',
                    'updated_at' => '2018-02-06 11:15:51',
                    'permission_group_id' => NULL,
                    'table_name' => 'contact_messages',
                ),
            14 =>
                array (
                    'id' => '75',
                    'key' => 'delete_contact_messages',
                    'created_at' => '2018-02-06 11:15:51',
                    'updated_at' => '2018-02-06 11:15:51',
                    'permission_group_id' => NULL,
                    'table_name' => 'contact_messages',
                ),
            15 =>
                array (
                    'id' => '76',
                    'key' => 'browse_pages',
                    'created_at' => '2018-02-06 11:54:53',
                    'updated_at' => '2018-02-06 11:54:53',
                    'permission_group_id' => NULL,
                    'table_name' => 'pages',
                ),
            16 =>
                array (
                    'id' => '77',
                    'key' => 'read_pages',
                    'created_at' => '2018-02-06 11:54:53',
                    'updated_at' => '2018-02-06 11:54:53',
                    'permission_group_id' => NULL,
                    'table_name' => 'pages',
                ),
            17 =>
                array (
                    'id' => '78',
                    'key' => 'edit_pages',
                    'created_at' => '2018-02-06 11:54:53',
                    'updated_at' => '2018-02-06 11:54:53',
                    'permission_group_id' => NULL,
                    'table_name' => 'pages',
                ),
            18 =>
                array (
                    'id' => '79',
                    'key' => 'add_pages',
                    'created_at' => '2018-02-06 11:54:53',
                    'updated_at' => '2018-02-06 11:54:53',
                    'permission_group_id' => NULL,
                    'table_name' => 'pages',
                ),
            19 =>
                array (
                    'id' => '80',
                    'key' => 'delete_pages',
                    'created_at' => '2018-02-06 11:54:53',
                    'updated_at' => '2018-02-06 11:54:53',
                    'permission_group_id' => NULL,
                    'table_name' => 'pages',
                ),
            /*
             * Apparently, this is a new key that was added in Voyager 1.1. Without this, trying to
             * edit a bread would throw a `Exception (400): Permission does not exist`. Since
             * this seed file was auto-generated I am just adding a ridiculously large
             * key to make sure I can squeeze the permission in. Also, this id must
             * be added to the `permission_role` table for the key associated to
             * the admin role user (i.e., one in the current situation).
             */
            20 =>
                array (
                    'id' => '999',
                    'key' => 'browse_bread',
                    'created_at' => '2018-02-02 17:41:22',
                    'updated_at' => '2018-02-02 17:41:22',
                    'permission_group_id' => NULL,
                    'table_name' => NULL,
                ),
        ));


    }
}