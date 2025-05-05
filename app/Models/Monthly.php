<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Contract;


class Monthly extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'contract_id',
        'name',
        'tipo',
        'escala',
        'salario_base',
        'custo',
        'quantidade_postos',
        
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
