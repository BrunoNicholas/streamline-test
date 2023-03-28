<?php

namespace App\Models\Records;

use App\Models\UsersProfiles\DoctorProfile;
use App\Models\UsersProfiles\NurseProfile;
use App\Models\UsersProfiles\PatientProfile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalReport extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_profile_id', 'nurse_profile_id', 'patient_profile_id', 'appointment_id', 'patient_visit_id', 'recorded_symptoms', 'lab_tests', 'diagnosis', 'treatment_given', 'visit_outcome'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function doctor()
    {
        $this->belongsTo(DoctorProfile::class);
    }

    public function nurse()
    {
        $this->belongsTo(NurseProfile::class);
    }

    public function patient()
    {
        $this->belongsTo(PatientProfile::class);
    }
}
