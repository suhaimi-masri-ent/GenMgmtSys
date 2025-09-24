<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class KhidmatWala extends Model
{
    use HasFactory;

    // protected $guareded = [];
    protected $guarded = [];


    public function khidmatmarkaz(): BelongsTo
    {
        return $this->belongsTo(KhidmatMarkaz::class);
    }

    public function markaz(): BelongsTo
    {
        return $this->belongsTo(Markaz::class);
    }

    public function ahbab(): BelongsTo
    {
        return $this->belongsTo(Ahbab::class);
    }

    // public function ahbabs(): HasMany
    // {
    //     return $this->hasMany(Ahbab::class);
    // }
}
