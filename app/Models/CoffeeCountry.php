<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoffeeCountry extends Model
{
    use HasFactory;

    protected $table = 'coffee_countries';

    protected $fillable = [
        'name'
    ];

    public function productCoffeeCountries(): BelongsTo
    {
        return $this->belongsTo(ProductCoffeeCountry::class);
    }
}
