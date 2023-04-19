<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('complete_blood_counts', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('wbc_count')->nullable();
            $table->string('rbc_count')->nullable();
            $table->string('hemoglobin')->nullable();
            $table->string('hematocrit')->nullable();
            $table->string('MCV')->nullable();
            $table->string('MCH')->nullable();
            $table->string('MCHC')->nullable();
            $table->string('platelets_count')->nullable();
            $table->string('neutrophils')->nullable();
            $table->string('lymphocytes')->nullable();
            $table->string('monocytes')->nullable();
            $table->string('eosinophils')->nullable();
            $table->string('basophils')->nullable();
            $table->string('bands')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('ESR')->nullable();
            $table->string('BT')->nullable();
            $table->string('CT')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('complete_blood_counts');
    }
};
