<?php

namespace Modules\Reviews\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Reviews\Database\Seeders\RolesAndPermissionsSeeder;

class ReviewsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $this->call([

            ReviewRolesAndPermissionsSeeder::class,
        ]);
    }
}
