<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Place extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'hall_id', 'is_vip', 'row', 'seat'
    ] ;
    public function hall(): BelongsTo
    {
        return $this->belongsTo(Hall::class);
    }
}
