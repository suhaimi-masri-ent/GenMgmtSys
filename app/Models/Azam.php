<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Azam extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // protected function casts(): array
    // {
    //     return [
    //         'cuti' => 'boolean',
    //         'permission' => 'boolean',
    //         'amer' => 'boolean',
    //         'pengendali' => 'boolean',
    //         'tertib' => 'boolean',
    //     ];
    // }   

    public function amalan(): BelongsTo
    {
        return $this->belongsTo(Amalan::class);
    }

    public function ahbab(): BelongsTo
    {
        return $this->belongsTo(Ahbab::class);
    }    

    public function mohallah(): BelongsTo
    {
        return $this->belongsTo(Mohallah::class);
    }  
}
