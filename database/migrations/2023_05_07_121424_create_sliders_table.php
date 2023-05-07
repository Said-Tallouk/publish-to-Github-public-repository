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
        // la creation d'u table
        Schema::create('sliders', function (Blueprint $table) {   
        $table->id();
        $table->string('image')->nullable(false);
        $table->string('type')->nullable(false);
        $table->string('video')->nullable(true);
        $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
