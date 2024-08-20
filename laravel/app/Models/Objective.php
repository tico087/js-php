<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Objective extends Model
{
    use HasFactory;

    protected $table = 'objectives';
    protected $guarded = ['created_at', 'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function keyResults(): HasMany
    {
        return $this->hasMany(KeyResult::class);
    }
}
