<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Bond;
use App\Models\Work;


class Applicant extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = [
        'name',
        
    ];
    public function bonds(): HasMany
    {
        return $this->hasMany(Bond::class);
    }

    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

}
