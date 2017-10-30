<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class IntroductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Model\Introduction::class, 100)->create();
        Model::reguard();
    }
}
