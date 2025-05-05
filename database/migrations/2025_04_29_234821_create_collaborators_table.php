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
        Schema::create('collaborators', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('rg');
            $table->date('birth');
            $table->string('sex');
            $table->string('phone');
            $table->string('cellphone')->nullable();
            $table->string('address');
            $table->string('number');
            $table->string('complement');
            $table->string('city');
            $table->string('state');
            $table->string('cep');
            $table->boolean('applicant')->default(false);
            $table->timestamps();
            $table->softDeletesDateTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaborators');
    }
};
