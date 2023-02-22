<?php

namespace Database\Seeders;

use App\Models\Disc;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = Song::all();

        // Populate the pivot table
        Disc::all()->each(function ($disc) use ($songs) {
            $disc->songs()->attach(
                $songs->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
