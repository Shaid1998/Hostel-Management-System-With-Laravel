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
        Schema::create('photo_gallaries', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->text('photo_title')->nullable();
            $table->string('photo_credit')->nullable();
            $table->enum('photo_for',['all','admin','user','worker','guest'])->default('all');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_gallaries');
    }
};
