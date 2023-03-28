<?php

namespace App\Models\Activities;

use App\Models\UsersProfiles\DoctorProfile;
use App\Models\UsersProfiles\NurseProfile;
use App\Models\UsersProfiles\PatientProfile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_profile_id', 'doctor_profile_id', 'nurse_profile_id', 'clinical_notes', 'appointment_date', 'appointment_status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
