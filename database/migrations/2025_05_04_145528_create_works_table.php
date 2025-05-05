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
        Schema::create('works', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->foreignUuid('bond_id')->index();
            $table->foreignUuid('sector_id')->index();
            $table->foreignUuid('applicant_id')->index();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletesDateTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
