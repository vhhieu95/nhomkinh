<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Model\Contact::class, 100)->create();
        Model::reguard();
    }
}
