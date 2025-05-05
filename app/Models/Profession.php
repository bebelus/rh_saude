<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Specialty;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Profession extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'type',
    ];

    public function specialties(): HasMany
    {
        return $this->hasMany(Specialty::class);
    }

    public function monthlies(): HasMany
    {
        return $this->hasMany(Monthly::class);
    }

}
