<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Service;
use App\Models\User;
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
    User::factory(10)->create();
   Service:: factory(6)->create();
     \App\Models\News::factory(3)->create();
//      $this.call([
//         factory(User::class,10),
//      ]);
    }
}
