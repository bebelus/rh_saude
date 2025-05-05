<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * AINDA NÃO ESTOU USANDO POR ENQUANTO, DEVE FICAR PRO FINAL
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->foreignUuid('user_id')->index();
            $table->string('collaborator_name');
            $table->date('date');
            $table->string('applicant_name');
            $table->string('sector_name');
            $table->string('function_name');
            $table->string('enterprise_name');
            $table->string('type');
            $table->string('description');

            $table->timestamps();
            $table->softDeletesDateTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
