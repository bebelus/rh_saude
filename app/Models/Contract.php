<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Hourly;
use App\Models\Monthly;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Contract extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'enterprise_id',
        'contract_number',
        'description',
        'total_value',
        'start_date',
        'end_date',
        'teto_mensal',
        'date_start',
        'date_end',
        'status'
    ];

    public function enterprise(): BelongsTo
    {
        return $this->belongsTo(Enterprise::class);
    }

    public function hourlies(): HasMany
    {
        return $this->hasMany(Hourly::class);
    }
    public function monthlies(): HasMany
    {
        return $this->hasMany(Monthly::class);
    }
    protected function formattedTotalValue(): Attribute
    {
        return Attribute::get(fn () => 'R$ ' . number_format($this->total_value, 2, ',', '.'));
    }     
    protected function formattedTetoMensal(): Attribute
    {
        return Attribute::get(fn () => 'R$ ' . number_format($this->teto_mensal, 2, ',', '.'));
    }     

protected function casts(): array
    {
        return [
            'birth' => 'date:m/d/Y',
            'start_date' => 'date:m/d/Y',
            'end_date' => 'date:m/d/Y',
        ];
    }

}
