<?php

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $categoryIds = App\Model\Category::all('id')->pluck('id')->toArray();
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            factory(App\Model\Product::class, 1)->create([
                'category_id' => $faker->randomElement($categoryIds),
            ]);
        }
        Model::reguard();
    }
}
