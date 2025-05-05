<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Specialty extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'type',
        'professions_id',
    ];

    public function professions(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }   

    public function hourly(): HasMany
    {
        return $this->hasMany(Hourly::class);
    }
}
