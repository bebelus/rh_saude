<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Contract;


class Hourly extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'contract_id',
        'name',
        'tipo',
        'horas_totais',
        'horas_mensais',
        'salario_hora',
        'custo_hora',
        'horas_usadas',
    ];

    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
    public function bonds(): HasMany
    {
        return $this->hasMany(Bond::class);
    }

}
