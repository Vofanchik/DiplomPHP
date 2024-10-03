<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hall extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    public $timestamps = false;

    public function sesses(): HasMany
    {
        return $this->hasMany(Sess::class);
    }

    public function places(): HasMany
    {
        return $this->hasMany(Place::class);
    }
}
