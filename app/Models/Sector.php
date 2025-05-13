<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\HealthUnit;
use App\Models\Work;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Sector extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'health_unit_id',
        'name',
        'description',
        'type',
    ];

    public function healthUnit(): BelongsTo
    {
        return $this->belongsTo(HealthUnit::class);
    }

    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

        protected function shortDescription(): Attribute
    {
        return Attribute::make(
            get: fn () => strlen($this->description) > 50 ? substr($this->description, 0, 50).'...' : $this->description
        );
    }


}
