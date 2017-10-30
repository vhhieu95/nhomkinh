<?php

use App\Model\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Model\Project::class, 100)->create();
        Model::reguard();
    }
}
