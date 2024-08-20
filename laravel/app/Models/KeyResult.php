<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KeyResult extends Model
{
    use HasFactory;

    protected $table = 'key_results';
    protected $guarded = ['created_at', 'updated_at'];


    public function objective(): BelongsTo
    {
        return $this->belongsTo(Objective::class);
    }

    public function checkIns(): HasMany
    {
        return $this->hasMany(CheckIn::class);
    }
}
