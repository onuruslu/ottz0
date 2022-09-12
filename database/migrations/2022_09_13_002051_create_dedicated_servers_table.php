<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('dedicated_servers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id');

            $table->string('type');
            $table->unsignedFloat('price');
            $table->string('processor_line_1');
            $table->string('processor_line_2');
            $table->string('memory');
            $table->string('storage_line_1');
            $table->string('storage_line_2');
            $table->string('data');
            $table->string('benchmark');
            $table->unsignedFloat('benchmark_percentage');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dedicated_servers');
    }
};
