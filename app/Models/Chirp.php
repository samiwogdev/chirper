<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    public function user(): BelongsTo //Chirp & user relationship defined.
    {
        return $this->belongsTo(Chirp::class);
    }
}
