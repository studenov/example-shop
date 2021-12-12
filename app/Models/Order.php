<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function calculateFullSum()
    {
        $sum = 0;
        foreach ($this->products as $product) {
           $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public static function eraseOrderSum()
    {
        session()->forget('full_order_sum');
    }

    public static function changeFullSum($changeSum)
    {
        $sum = self::getFullSum() + $changeSum;
        session(['full_order_sum' => $sum]);
    }

    public static function getFullSum()
    {
        return session('full_order_sum', 0);
    }

    public function saveOrder($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->status = self::STATUS_ACTIVE;
        $this->save();
        $this->clearBasket();
        return true;
    }

    public function clearBasket()
    {
        session()->forget('orderId');
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }
}
