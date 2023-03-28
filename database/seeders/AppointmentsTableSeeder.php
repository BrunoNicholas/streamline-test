<?php

namespace Database\Seeders;

use App\Models\Activities\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointments = [
            [
                'patient_profile_id' => rand(1, 10000),
                'appointment_date' => Carbon::create(2023, 5, 31, 0),
                'appointment_status' => 'pending'
            ],
            [
                'patient_profile_id' => rand(1, 10000),
                'appointment_date' => Carbon::create(2023, 6, 15, 0),
                'appointment_status' => 'pending'
            ],
            [
                'patient_profile_id' => rand(1, 10000),
                'appointment_date' => Carbon::create(2023, 10, 1, 0),
                'appointment_status' => 'pending'
            ],
        ];

        foreach ($appointments as $appo) {
            Appointment::create($appo);
        }
    }
}
