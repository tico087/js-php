<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckIn extends Model
{
    use HasFactory;

    protected $table = 'check_ins';
    protected $guarded = ['created_at', 'updated_at'];


    public function keyResult(): BelongsTo
    {
        return $this->belongsTo(KeyResult::class);
    }

}
