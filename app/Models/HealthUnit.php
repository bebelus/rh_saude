<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;



class HealthUnit extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'cnes',
        'type',
        'cnpj',
        'fantasia',
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

    public function sectors(): HasMany
    {
        return $this->hasMany(Sector::class);
    }

}
