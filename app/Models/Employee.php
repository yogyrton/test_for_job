<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'filial_id',
    ];

    public function filial(): BelongsTo
    {
        return $this->belongsTo(Filial::class);
    }
}
