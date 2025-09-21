<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;


class Mohallah extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'management',
    //     'halqah_id',        
    // ];

    protected $guarded = [];

    public function halqah(): BelongsTo
    {
        return $this->belongsTo(Halqah::class);
    }

    public function markaz(): BelongsTo
    {
        return $this->belongsTo(Markaz::class);
    }

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }



}
