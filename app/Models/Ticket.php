<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'place_id', 'sess_id'
    ] ;
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
    public function sess(): BelongsTo
    {
        return $this->belongsTo(Sess::class);
    }
}

