<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('seman_analyses', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('volume')->nullable();
            $table->string('color')->nullable();
            $table->string('viscosity')->nullable();
            $table->string('PH')->nullable();
            $table->string('total_sperm_count')->nullable();
            $table->string('active_motile')->nullable();
            $table->string('sluggish_motile')->nullable();
            $table->string('non_motile')->nullable();
            $table->string('pus_cell')->nullable();
            $table->string('dibberies_cell')->nullable();
            $table->string('RBC')->nullable();
            $table->string('morphology')->nullable();
            $table->string('opinion')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seman_analyses');
    }
};
