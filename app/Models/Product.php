<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class); // Один к одному
    }

    public function basketItems()
    {
        return $this->hasMany(BasketItem::class);
    }
}

