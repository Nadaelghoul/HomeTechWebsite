<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->enum('area', ['Al Manakh District','Al Zohour District','Al-talatini District','South District','East Port Said District','Al-dowahi District','West District']);
            $table->string('address');
            $table->date('execution_day');
            $table->string('requirements')->nullable();
            $table->string('service');
            $table->string('skill');
            $table->string('price');
            $table->string('request_key');
            $table->enum('status', ['pending', 'accepted', 'expired'])->default('pending');
            $table->foreignId('accepted_provider_id')->nullable()->constrained('providers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
