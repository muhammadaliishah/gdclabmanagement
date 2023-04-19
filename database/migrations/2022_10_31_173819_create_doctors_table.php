<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('cnic_number')->nullable();
            $table->string('email')->nullable();
            $table->string('specialist')->nullable();
            $table->string('address')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
