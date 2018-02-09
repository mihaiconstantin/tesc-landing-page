<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => '1',
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Site Title',
                'details' => '',
                'type' => 'text',
                'order' => '1',
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => '2',
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Site Description',
                'details' => '',
                'type' => 'text',
                'order' => '2',
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => '4',
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => '',
                'details' => '',
                'type' => 'text',
                'order' => '6',
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => '5',
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/February2018/hF6Z9raVeyBTI8E0d5hF.jpg',
                'details' => '',
                'type' => 'image',
                'order' => '5',
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => '6',
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Admin Section',
                'details' => '',
                'type' => 'text',
                'order' => '1',
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => '7',
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to Tilburg Experience Sampling Center',
                'details' => '',
                'type' => 'text',
                'order' => '2',
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => '8',
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings/February2018/3fxbPt18byPmZ27qprmk.png',
                'details' => '',
                'type' => 'image',
                'order' => '3',
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => '9',
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings/February2018/pQEzyuo5Yz2gzJ91oOO4.png',
                'details' => '',
                'type' => 'image',
                'order' => '4',
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => '10',
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => '262120826588-tphd9t09d79nvtc5tphse74f9ipseh8d.apps.googleusercontent.com',
                'details' => '',
                'type' => 'text',
                'order' => '1',
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => '12',
                'key' => 'site.keywords',
                'display_name' => 'Site Keywords',
                'value' => 'Site keywords',
                'details' => NULL,
                'type' => 'text',
                'order' => '4',
                'group' => 'Site',
            ),
            10 => 
            array (
                'id' => '13',
                'key' => 'site.navbar_logo',
                'display_name' => 'Navbar Logo',
                'value' => 'settings/February2018/mjkie6fZZnjmaHCagCt9.png',
                'details' => NULL,
                'type' => 'image',
                'order' => '7',
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => '14',
                'key' => 'site.footer_logo',
                'display_name' => 'Footer Logo',
                'value' => 'settings/February2018/ajHMyfUJjwHnqk1JsczZ.png',
                'details' => NULL,
                'type' => 'image',
                'order' => '8',
                'group' => 'Site',
            ),
            12 => 
            array (
                'id' => '15',
                'key' => 'site.terms_conditions',
                'display_name' => 'Terms and Conditions',
                'value' => '<h6>Terms Section 1</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h6>Terms Section 2</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h6>Terms Section 3</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => '11',
                'group' => 'Site',
            ),
            13 => 
            array (
                'id' => '16',
                'key' => 'site.project_logo',
                'display_name' => 'Project Logo',
                'value' => 'settings/February2018/h8QJPMiSeoo3Y09AQSjQ.png',
                'details' => NULL,
                'type' => 'image',
                'order' => '9',
                'group' => 'Site',
            ),
            14 => 
            array (
                'id' => '17',
                'key' => 'site.twitter_logo',
                'display_name' => 'Twitter Logo',
                'value' => 'settings/February2018/4H84QM7vm5oWZko4RHgs.png',
                'details' => NULL,
                'type' => 'image',
                'order' => '10',
                'group' => 'Site',
            ),
        ));
        
        
    }
}