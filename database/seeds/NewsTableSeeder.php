<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Model\News::class, 1)->create();
        Model::reguard();
    }
}
