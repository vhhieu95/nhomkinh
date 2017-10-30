<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(UsersTableSeeder::class);
        dd(1);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(IntroductionsSeeder::class);
    }
}
