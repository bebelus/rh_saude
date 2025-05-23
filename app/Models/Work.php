<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Sector;
use App\Models\Bond;
use App\Models\Applicant;
use App\Models\HealthUnit;



class Work extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'bond_id',
        'sector_id',
        'applicant_id',
        'start_date',
        'end_date',
        'status',
    ];

    public function bond(): BelongsTo
    {
        return $this->belongsTo(Bond::class);
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }

        protected function casts(): array
    {
        return [
            'start_date' => 'date:m/d/Y',
            'end_date' => 'date:m/d/Y',
        ];
    }

    

}
