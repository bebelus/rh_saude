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
        Schema::create('bonds', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->foreignUuid('collaborator_id')->index();
            $table->foreignUuid('hourly_id')->index()->nullable();
            $table->foreignUuid('monthly_id')->index()->nullable();
            $table->foreignUuid('applicant_id')->index();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status');
            $table->integer('hora_vinculo'); // horas adicionais de algum acordo prévio
            $table->text('observations')->nullable();
            $table->timestamps();
            $table->softDeletesDateTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonds');
    }
};
