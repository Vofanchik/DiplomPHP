<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false; //Убирает created at
    protected $fillable = [
        'title', 'duration'
    ] ;

    public function sesses(): HasMany
    {
        return $this->hasMany(Sess::class);
    }
}
