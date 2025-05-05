<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Movement extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
            'user_id',
            'collaborator_name',    
            'date',
            'applicant_name',
            'sector_name',
            'function_name',
            'enterprise_name',
            'type',
            'description',m  
        ];
}
