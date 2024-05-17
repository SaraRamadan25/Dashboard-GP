<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function guards(): HasMany
    {
        return $this->hasMany(Guard::class);
    }

    public function area(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function jackets(): HasMany
    {
        return $this->hasMany(Jacket::class);
    }
}
