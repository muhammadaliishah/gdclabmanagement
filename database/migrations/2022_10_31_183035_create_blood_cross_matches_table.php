<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('blood_cross_matches', function (Blueprint $table) {
            $table->id();


            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->string('issued_by_incharge_name')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('donor_name')->nullable();
            $table->string('blood_group_donor')->nullable();

            $table->string('result')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blood_cross_matches');
    }
};
