<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('recipes')->insert([
            [

                'food_title' => '10 oz AAA Striploin',
                'food_image' => '/images/food2.jpg',
                'food_description' => 'This centre cut. AAA Canadian Sirlorin, aged for 60 days and fire-grilled to order top with a garlic. And more features',
                'food_staus' => 'Like',


            ],
            [

                'food_title' => '7 oz AAA Sirloin',
                'food_image' => '/images/food3.jpg',
                'food_description' => 'Our 7oz AAA Canadian Sirlorin. Aged for 60 days and fire-grilled to order top with a garlic. And more features',
                'food_staus' => 'Deslike',


            ],
            [

                'food_title' => 'Seasonal Steak Special',
                'food_image' => '/images/food1.jpg',
                'food_description' => 'Our 7oz AAA Canadian Sirlorin, aged for 60 days and fire-grilled to order top with a garlic. And more features',
                'food_staus' => 'Like',


            ],
            [

                'food_title' => 'Seasonal Steak Special',
                'food_image' => '/images/food2.jpg',
                'food_description' => 'Our 7oz AAA Canadian Sirlorin, aged for 60 days and fire-grilled to order top with a garlic. And more features',
                'food_staus' => 'Deslike',


            ],
            [

                'food_title' => 'Seasonal Steak Special',
                'food_image' => '/images/food3.jpg',
                'food_description' => 'Our 7oz AAA Canadian Sirlorin, aged for 60 days and fire-grilled to order top with a garlic. And more features',
                'food_staus' => 'Like',


            ],
        ]);
    }
}
