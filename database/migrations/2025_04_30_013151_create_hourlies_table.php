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
        Schema::create('hourlies', function (Blueprint $table) {
            $table->uuid('id')->primary;
            $table->foreignUuid('contract_id')->index();
            $table->string('name');
            $table->string('tipo');
            $table->double('horas_totais');
            $table->double('horas_mensais');
            $table->double('salario_hora');
            $table->double('custo_hora');
            $table->double('horas_usadas');
            $table->timestamps();
            $table->softDeletesDateTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hourlies');
    }
};
