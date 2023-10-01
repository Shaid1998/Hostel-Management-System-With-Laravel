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
        Schema::create('home_topics', function (Blueprint $table) {
            $table->id();
            $table->string('home_title');
            $table->string('home_sub_Title');
            $table->string('Home_button_1');
            $table->string('home_button_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_topics');
    }
};
