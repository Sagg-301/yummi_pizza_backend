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
            'description' => "Classic Pizza with mozarella cheese and tomato sauce",
            'image_url' => "https://upload.wikimedia.org/wikipedia/commons/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg",
        ]);

        DB::table('items')->insert([
            'name' => "Sicilian",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "Pizza served in a square bread, with peperonni and ham",
            'image_url' => "https://static01.nyt.com/images/2018/12/05/dining/05kitchenrex1/merlin_147457287_3700e223-72be-4dd8-a70e-275066fd386f-articleLarge.jpg",
        ]);

        DB::table('items')->insert([
            'name' => "Greek",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "Pizza with cherry tomatoes, peppers and onions",
            'image_url' => "https://images-gmi-pmc.edge-generalmills.com/32fb2446-1efc-434c-a053-7dabe8d963be.jpg",
        ]);

        DB::table('items')->insert([
            'name' => "New York Style",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "New York Style Pizza, with shredded mozarella cheese and tomatoe sauce",
            'image_url' => "https://www.yeprecipes.com/data/media/7/new-york-pizza.jpg",
        ]);

        DB::table('items')->insert([
            'name' => "Hawaiian",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "Also known as the \"The Devil's Pizza\", because it was invented in the depths of hell. Why would you subject yourself to this?",
            'image_url' => "https://www.kingarthurflour.com/sites/default/files/styles/featured_image/public/recipe_legacy/1374-3-large.jpg?itok=sreY41A-",
        ]);

        DB::table('items')->insert([
            'name' => "Detroit",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "Detroit style pizza, served on square bread used as a kind of deep plate",
            'image_url' => "https://www.washingtonpost.com/rf/image_982w/2010-2019/WashingtonPost/2016/02/18/Food/Images/DetroitPizza-35681455763987.jpg",
        ]);

        DB::table('items')->insert([
            'name' => "Chicago",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "Chicago Style Pizza",
            'image_url' => "https://giordanos.com/wp-content/uploads/Hero-image_1210-v2.jpg",
        ]);

        DB::table('items')->insert([
            'name' => "Margarita",
            'price' => 10.5,
            'type' => "pizza",
            'description' => "The orginal, the one that started it all",
            'image_url' => "https://lh3.googleusercontent.com/proxy/RJV2n6rOIjz-OeoWuQNQC0_59QwoQLR5ZsJWX2eJp9Wo71CYqVdoSupcAbSVdMKqriVoojL1nY7_hn7yWy7pbFfG9grBvV3rb2mOtJHsYiqhbavgvySa1reyfA",
        ]);

        DB::table('items')->insert([
            'name' => "Large Soda",
            'price' => 1.99,
            'type' => "other",
            'description' => "A large soda of your choice",
            'image_url' => "https://www.cfacdn.com/img/order/COM/Menu_Refresh/Drinks/Drinks%20PDP/_0000s_0022_Feed_Menu_0000_Drinks_Coca-cola.png",
        ]);

        DB::table('items')->insert([
            'name' => "Medium Soda",
            'price' => 1,
            'type' => "other",
            'description' => "A medium soda of your choice",
            'image_url' => "https://www.cfacdn.com/img/order/COM/Menu_Refresh/Drinks/Drinks%20PDP/_0000s_0022_Feed_Menu_0000_Drinks_Coca-cola.png",
        ]);

        DB::table('currencies')->insert([
            'name' => "Dollar",
            'symbol' => "$",
            'exchange_rate' => 1,
        ]);

        DB::table('currencies')->insert([
            'name' => "Euro",
            'symbol' => "€",
            'exchange_rate' => 1.5,
            ]);

        DB::table('users')->insert([
            'name' => "Test User",
            'email' => 'test@testmail.com',
            'password' => bcrypt('123456'),
        ]);
}
}
