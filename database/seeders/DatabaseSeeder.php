<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BlogsTableSeeder::class
        ]);
        // $this->call(UserSeeder::class);
        // $this->call(BlogsTableSeeder::class);
    }

}
