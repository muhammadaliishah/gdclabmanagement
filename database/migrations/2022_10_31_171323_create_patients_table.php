<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('age')->nullable();
            $table->string('age_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('cnic_number')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
