<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('a_b_o_blood_groups', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('ABO_blood_group')->nullable();
            $table->string('RH_type')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('a_b_o_blood_groups');
    }
};
