<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enterprise extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'razao_social',
        'fantasia',
        'cnpj',
        'email',
        'phone',
        'cellphone',
        'address',
        'number',
        'complement',
        'city',
        'state',
        'cep',
    ];

    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }
}
