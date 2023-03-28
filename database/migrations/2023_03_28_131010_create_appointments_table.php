<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_profile_id');
            $table->unsignedBigInteger('doctor_profile_id')->unique();
            $table->unsignedBigInteger('nurse_profile_id')->unique();
            $table->text('clinical_notes')->nullable();
            $table->dateTime('appointment_date')->nullable();
            $table->string('appointment_status')->nullable()->comment('pending,active');

            $table->timestamps();

            $table->foreign('patient_profile_id')->references('id')->on('patient_profiles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('doctor_profile_id')->references('id')->on('doctor_profiles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nurse_profile_id')->references('id')->on('nurse_profiles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
