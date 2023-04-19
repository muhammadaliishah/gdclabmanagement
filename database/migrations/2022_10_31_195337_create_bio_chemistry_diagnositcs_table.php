<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bio_chemistry_diagnositcs', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('bilirubin_total')->nullable();
            $table->string('ALT_SGPT')->nullable();
            $table->string('AST_SGOT')->nullable();
            $table->string('alkaline_phosphatase')->nullable();
            $table->string('blood_urea')->nullable();
            $table->string('creatinine')->nullable();
            $table->string('uric_acid')->nullable();
            $table->string('cholesterol')->nullable();
            $table->string('triglycerides')->nullable();
            $table->string('HDL_cholesterol')->nullable();
            $table->string('LDL_cholesterol')->nullable();
            $table->string('LDH')->nullable();
            $table->string('sodium')->nullable();
            $table->string('potassium')->nullable();
            $table->string('chloride')->nullable();
            $table->string('BUN')->nullable();
            $table->string('calcium')->nullable();
            $table->string('glucose_fasting')->nullable();
            $table->string('glucose_random')->nullable();
            $table->string('serum_albumin')->nullable();
            $table->string('GCT')->nullable();
            $table->string('OGTT')->nullable();
            $table->string('first_hour')->nullable();
            $table->string('second_hour')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bio_chemistry_diagnositcs');
    }
};
