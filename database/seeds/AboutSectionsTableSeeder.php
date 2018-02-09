<?php

use Illuminate\Database\Seeder;

class AboutSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_sections')->delete();
        
        \DB::table('about_sections')->insert(array (
            0 => 
            array (
                'title' => 'First Section Title',
                'subtitle' => 'Section Subtitle',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'fade_direction' => 'bottom',
                'image' => NULL,
                'image_display' => '0',
                'image_alt' => NULL,
                'image_position' => NULL,
                'display' => '1',
                'order' => '1',
                'created_at' => '2018-02-06 21:50:25',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'title' => 'Second Section Title',
                'subtitle' => 'Section Subtitle',
                'content' => 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'fade_direction' => 'right',
                'image' => 'about-sections/February2018/1X6K87EbZ4YIKeknC8QF.png',
                'image_display' => '1',
                'image_alt' => 'Image description',
                'image_position' => 'left',
                'display' => '1',
                'order' => '1',
                'created_at' => '2018-02-06 21:50:25',
                'updated_at' => '2018-02-06 22:23:56',
            ),
            2 => 
            array (
                'title' => 'Third Section Title',
                'subtitle' => 'Section Subtitle',
                'content' => 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'fade_direction' => 'left',
                'image' => 'about-sections/February2018/xLSPVJdH3lavtSKz2rLD.png',
                'image_display' => '1',
                'image_alt' => NULL,
                'image_position' => 'right',
                'display' => '1',
                'order' => '3',
                'created_at' => '2018-02-06 21:50:25',
                'updated_at' => '2018-02-06 22:26:37',
            ),
            3 => 
            array (
                'title' => 'Forth Section Title',
                'subtitle' => 'Section Subtitle',
                'content' => 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'fade_direction' => 'right',
                'image' => 'about-sections/February2018/7YBfbrio2Xxfw4Bd26qu.png',
                'image_display' => '1',
                'image_alt' => NULL,
                'image_position' => 'left',
                'display' => '1',
                'order' => '4',
                'created_at' => '2018-02-06 21:50:25',
                'updated_at' => '2018-02-06 22:27:12',
            ),
        ));
        
        
    }
}