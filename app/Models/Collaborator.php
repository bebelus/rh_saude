<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;




class Collaborator extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'rg',
        'birth',
        'sex',
        'phone',
        'cellphone',
        'address',
        'number',
        'complement',
        'city',
        'state',
        'cep',
        'applicant',
        
    ];

    
    public function bonds(): HasMany
    {
        return $this->hasMany(Bond::class);
    }

    protected function casts(): array
    {
        return [
            'birth' => 'date:m/d/Y',
        ];
    }


}
