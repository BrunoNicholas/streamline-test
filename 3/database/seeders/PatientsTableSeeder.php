<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UsersProfiles\PatientProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_users = User::all(['id', 'name']);

        foreach ($all_users as $user) {
            PatientProfile::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
