<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory;

    public function guards(): HasMany
    {
        return $this->hasMany(Guard::class);
    }

    public function admins(): HasMany
    {
        return $this->hasMany(Admin::class);
    }

    public function jackets(): HasMany
    {
        return $this->hasMany(Jacket::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
