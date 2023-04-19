<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('clinical_pathologies', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('color')->nullable();
            $table->string('consistency')->nullable();
            $table->string('blood')->nullable();
            $table->string('mucus')->nullable();
            $table->string('WBC_PUS_cells')->nullable();
            $table->string('RBC')->nullable();
            $table->string('ova_parasites')->nullable();
            $table->string('cyst')->nullable();
            $table->string('fatty_globules')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clinical_pathologies');
    }
};
