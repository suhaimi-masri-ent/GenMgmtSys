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
        Schema::create('azams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('ahbab_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mohallah_id')->constrained()->cascadeOnDelete();
            $table->foreignId('amalan_id')->constrained()->cascadeOnDelete();
            $table->char('duration');
            $table->boolean('cuti');
            $table->boolean('permission');
            $table->decimal('expense');
            $table->date('checkin')->nullable();
            $table->string('last1y')->nullable();
            $table->string('last2y')->nullable();
            $table->boolean('amer');
            $table->boolean('pengendali');
            $table->boolean('tertib');
            $table->string('description')->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('azams');
    }
};
