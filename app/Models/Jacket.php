<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jacket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function guardRelation(): BelongsTo
    {
        return $this->belongsTo(Guard::class);
    }
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

}
