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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('person_name')->nullable();
            $table->string('payment_amount')->nullable();
            $table->enum('person_designation',['worker','user'])->default('user');
            $table->text('payment_details')->nullable();
            $table->enum('payment_medium',['bKash','uKash','nagad','direct','other'])->default('direct');
            $table->string('account_number')->nullable();
            $table->string('reference_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
