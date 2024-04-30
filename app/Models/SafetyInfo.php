<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'height',
        'weight',
        'heart_rate',
        'blood_type',
        'diseases',
        'allergies',
        'child_id',
    ];

    public function child(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Child::class);
    }
}
