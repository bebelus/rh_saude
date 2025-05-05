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
        Schema::create('monthlies', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->foreignUuid('contract_id')->index();
            $table->string('name');
            $table->string('tipo');
            $table->string('escala');
            $table->double('salario_base');
            $table->double('custo');
            $table->integer('quantidade_postos');
            $table->timestamps();
            $table->softDeletesDateTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthlies');
    }
};
