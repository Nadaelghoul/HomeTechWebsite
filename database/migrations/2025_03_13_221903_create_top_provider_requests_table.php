<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('top_provider_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('providers')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->enum('area', ['Al Manakh District','Al Zohour District','Al-talatini District','South District','East Port Said District','Al-dowahi District,West District']);
            $table->string('Problem_Address');
            $table->date('execution_day');
            $table->string('requirements');
            $table->string('service');
            $table->string('skill');
            $table->string('price');
            $table->string('service_provider');
            $table->string('request_key');
            $table->enum('status', ['pending', 'accepted', 'expired','refuced'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('top_provider_requests');
    }
};
