<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => "Neapolitan",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Sicilian",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Greek",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "New York Style",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Hawaiian",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Detroit",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Chicago",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Margarita",
            'price' => 10.5,
            'type' => "pizza",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Large Soda",
            'price' => 1.99,
            'type' => "other",
            'image_url' => "",
        ]);

        DB::table('items')->insert([
            'name' => "Medium Soda",
            'price' => 1,
            'type' => "other",
            'image_url' => "",
        ]);
    }
}
