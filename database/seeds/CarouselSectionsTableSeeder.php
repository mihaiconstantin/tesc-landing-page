<?php

use Illuminate\Database\Seeder;

class CarouselSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carousel_sections')->delete();
        
        \DB::table('carousel_sections')->insert(array (
            0 => 
            array (
                'title' => 'First Carousel Title',
                'content' => 'First Carousel Content',
                'image' => 'carousel-sections/February2018/tiFvsOEI5S9wu9dPcC2Y.jpg',
                'display' => '1',
                'order' => '1',
                'created_at' => '2018-02-02 15:41:00',
                'updated_at' => '2018-02-09 11:20:27',
            ),
            1 => 
            array (
                'title' => 'Second Carousel Title',
                'content' => 'Second Carousel Content',
                'image' => 'carousel-sections/February2018/uv649hwlhgDm85WPVHwH.jpg',
                'display' => '1',
                'order' => '2',
                'created_at' => '2018-02-02 15:41:00',
                'updated_at' => '2018-02-06 21:42:07',
            ),
        ));
        
        
    }
}