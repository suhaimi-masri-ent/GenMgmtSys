<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
        'abbr',
        
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function mohallahs(): HasMany
    {
        return $this->hasMany(Mohallah::class);
    }

    public function halqahs(): HasMany
    {
        return $this->hasMany(Halqah::class);
    }    

    public function markazs(): HasMany
    {
        return $this->hasMany(Markaz::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }


}
