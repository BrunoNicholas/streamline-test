<?php

namespace Database\Seeders;

use App\Models\Location\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            // roles
            [
                'region_name'          => 'Northern Uganda',
            ],
            [
                'region_name'          => 'Central Uganda',
            ],
            [
                'region_name'          => 'Eastern Uganda',
            ],
        ];

        foreach ($regions as $key => $value) {
            Region::create($value);
        }
    }
}
