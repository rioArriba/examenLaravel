<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Disc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compañias = Company::all();
        $compañias->each(function ($compañia){
            Disc::factory()->count(2)->create(["company_id" => $compañia->id]);
        });
    }
}
