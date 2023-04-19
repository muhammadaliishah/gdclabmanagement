<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('serological_rapid_diagnostics', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('hepatitisB_surface_antigen')->nullable();
            $table->string('hepatitisC_virus_antibody')->nullable();
            $table->string('human_immunodeficiency_virus')->nullable();
            $table->string('helicobacter_pylori_antibody')->nullable();
            $table->string('rheumatoid_arthritis')->nullable();
            $table->string('anti_streptolysin_o_tier')->nullable();
            $table->string('c_reactive_protein')->nullable();
            $table->string('prostate_specific_antigen')->nullable();
            $table->string('montox_test')->nullable();
            $table->string('heptitisA_virus_antibody')->nullable();
            $table->string('malaria_rapid_test')->nullable();
            $table->string('tuberculosis_rapid_test')->nullable();
            $table->string('toxoplasma_gondi_antibodies')->nullable();
            $table->string('typhoid_rapid_test')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serological_rapid_diagnostics');
    }
};
