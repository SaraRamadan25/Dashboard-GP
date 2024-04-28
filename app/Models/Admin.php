<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;

    public function guards(): HasMany
    {
        return $this->hasMany(Guard::class);
    }

    public function area(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    public function jacket(): HasMany
    {
        return $this->hasMany(Jacket::class);
    }
}
