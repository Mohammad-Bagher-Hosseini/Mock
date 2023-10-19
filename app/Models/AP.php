<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class AP extends Model
{
    use HasFactory;

    public function pop(): BelongsTo {
        return $this->belongsTo(Pop::class);
    }

    public function point(): HasOneThrough {
        return $this->hasOneThrough(AP::class, Link::class, 'ap_id', 'id', 'id', 'point_id');
    }
}
