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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('quotationid');
            $table->foreignId('companyid')->constrained('businesscompanylists')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('nccprofile')->constrained('nccprofiles')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('responsible')->constrained('h_r_s')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('maker')->constrained('h_r_s')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('gstoptional')->nullable();
            $table->integer('profitoptional')->nullable();
            $table->string('ref')->nullable();
            $table->string('customerreference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
