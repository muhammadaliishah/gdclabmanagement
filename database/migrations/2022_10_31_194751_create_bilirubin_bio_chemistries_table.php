<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bilirubin_bio_chemistries', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();

            $table->string('entry_number')->nullable();
            $table->date('date');

            $table->string('total_bilirubin')->nullable();
            $table->string('bilirubin_direct')->nullable();
            $table->string('bilirubin_inDirect')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bilirubin_bio_chemistries');
    }
};
