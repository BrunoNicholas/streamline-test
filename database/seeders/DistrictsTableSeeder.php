<?php

namespace Database\Seeders;

use App\Models\Location\District;
use App\Models\Location\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            // roles
            [
                'district_name'          => 'Kampala',
                'region_id'     => Region::where('region_name', 'Central Uganda')->first()->id
            ],
            [
                'district_name'          => 'Wakiso',
                'region_id'     => Region::where('region_name', 'Central Uganda')->first()->id
            ],
            [
                'district_name'          => 'Mukono',
                'region_id'     => Region::where('region_name', 'Central Uganda')->first()->id
            ],
        ];

        foreach ($districts as $key => $value) {
            District::create($value);
        }
    }
}
