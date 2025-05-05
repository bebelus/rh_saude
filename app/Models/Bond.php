<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Collaborator;
use App\Models\Hourly;
use App\Models\Monthly;
use App\Models\Work;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Applicant;

class Bond extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'collaborator_id',
        'hourly_id',
        'monthly_id',
        'start_date',
        'end_date',
        'status',
        'hora_vinculo'
    ];

    public function collaborator(): BelongsTo
    {
        return $this->belongsTo(Collaborator::class);
    }

    public function hourly(): BelongsTo
    {
        return $this->belongsTo(Hourly::class);
    }

    public function monthly(): BelongsTo
    {
        return $this->belongsTo(Monthly::class);
    }
    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }

}
