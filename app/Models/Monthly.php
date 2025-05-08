<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Contract;
use App\Models\Bond;
use Illuminate\Database\Eloquent\Casts\Attribute;



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

    protected function formattedSalario(): Attribute
    {
        return Attribute::get(fn () => 'R$ ' . number_format($this->salario_base, 2, ',', '.'));
    }     

    protected function formattedCusto(): Attribute
    {
        return Attribute::get(fn () => 'R$ ' . number_format($this->custo, 2, ',', '.'));
    }

}
