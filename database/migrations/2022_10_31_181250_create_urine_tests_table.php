<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('urine_tests', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('color')->nullable();
            $table->string('appearance')->nullable();
            $table->string('PH')->nullable();
            $table->string('specific_gravity')->nullable();
            $table->string('protein')->nullable();
            $table->string('glucose')->nullable();
            $table->string('ketones')->nullable();
            $table->string('bilirubin')->nullable();
            $table->string('blood')->nullable();
            $table->string('nitrite')->nullable();
            $table->string('wbc_pus_cells')->nullable();
            $table->string('rbc')->nullable();
            $table->string('epithelial_cells')->nullable();
            $table->string('cast')->nullable();
            $table->string('bacteria')->nullable();
            $table->string('calcium_oxalate')->nullable();
            $table->string('amorphous_urates')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('urine_tests');
    }
};
