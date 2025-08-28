<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('real_name', 150)->nullable();
            $table->enum('gender', ['Male', 'Female', 'Not Applicable'])->default('Not Applicable');
            $table->unsignedBigInteger('universe_id');
            $table->timestamps();

            // Foreign Key
            $table->foreign('universe_id')->references('id')->on('universes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
