<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, Translatable;

    protected $fillable = ['name', 'code', 'price', 'category_id', 'description', 'image', 'hit', 'new', 'recommend', 'count', 'name_en', 'description_en'];

    const MARKED_PRODUCT = 1;
    const DEFAULT_PRODUCT = 0;
    const IS_ENDING_COUNT = 5;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value === 'on' ? self::MARKED_PRODUCT : self::DEFAULT_PRODUCT;
    }

    public function setHitAttribute($value)
    {
        $this->attributes['hit'] = $value === 'on' ? self::MARKED_PRODUCT : self::DEFAULT_PRODUCT;
    }

    public function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = $value === 'on' ? self::MARKED_PRODUCT : self::DEFAULT_PRODUCT;
    }

    public function isHit()
    {
        return $this->hit === self::MARKED_PRODUCT;
    }

    public function isNew()
    {
        return $this->new === self::MARKED_PRODUCT;
    }

    public function isRecommend()
    {
        return $this->recommend === self::MARKED_PRODUCT;
    }

    public function isDefault()
    {
        if(!$this->isHit() && !$this->isNew() && !$this->isRecommend()){
            return true;
        }
    }

    public function scopeHit($query)
    {
        return $query->where('hit', self::MARKED_PRODUCT);
    }

    public function scopeNew($query)
    {
        return $query->where('new', self::MARKED_PRODUCT);
    }

    public function scopeRecommend($query)
    {
        return $query->where('recommend', self::MARKED_PRODUCT);
    }

    public function scopePriceFrom($query, $price)
    {
        return $query->where('price', '>=', $price);
    }

    public function scopePriceTo($query, $price)
    {
        return $query->where('price', '<=', $price);
    }

    public function scopeCode($query, $code)
    {
        return $query->where('code', $code);
    }

    public function isAvailable()
    {
        return !$this->trashed() && $this->count > 0;
    }

    public function isEnding()
    {
        return $this->count <= self::IS_ENDING_COUNT && $this->count > 0;
    }

    public function getPriceAttribute($value)
    {
        return CurrencyConversion::convert($value);
    }
}
