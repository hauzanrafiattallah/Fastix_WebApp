<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use HasFactory, SoftDeletes;

    // mass assignment
    protected $fillable = [
        'name',
        'telephone',
        'location',
        'slug',
        'photo',
    ];

    public function tickets(): HasMany 
    {
        return $this->hasMany(Ticket::class);
    }
}
