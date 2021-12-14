<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    const IS_ACTIVE = 0;
    const IS_INACTIVE = 1;

    protected $fillable = ['email', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::IS_ACTIVE);
    }

    public function scopeProductId($query, $productId)
    {
        return $query->where('product_id', $productId);
    }
}
