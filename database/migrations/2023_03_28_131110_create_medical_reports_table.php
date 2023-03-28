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
        Schema::create('medical_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('nurse_id')->nullable();

            $table->text('recorded_symptoms')->nullable();
            $table->string('lab_tests')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('villages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_reports');
    }
};
