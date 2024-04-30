<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    public function safetyInfo(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(SafetyInfo::class);
    }
}
