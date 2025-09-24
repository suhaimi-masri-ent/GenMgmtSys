<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class KhidmatMarkaz extends Model
{
    use HasFactory;

    // protected $guareded = [];
    protected $fillable = [
        'name',
        'content'
    ];


    // public function markaz(): BelongsTo
    // {
    //     return $this->belongsTo(Markaz::class);
    // }

    // public function ahbabs(): HasMany
    // {
    //     return $this->hasMany(Ahbab::class);
    // }

}
