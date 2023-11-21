<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nccprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneno')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('website')->nullable();
            $table->string('zip')->nullable();
            $table->integer('gst')->nullable();
            $table->integer('profit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nccprofiles');
    }
};
