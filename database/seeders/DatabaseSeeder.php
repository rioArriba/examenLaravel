<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(CompanySeeder::class);
        $this->call(DiscSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(DiscSongSeeder::class);
        $this->call(UserSeeder::class);
    }
}
