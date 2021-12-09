<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'price', 'category_id', 'description', 'image', 'hit', 'new', 'recommend'];

    const MARKED_PRODUCT = 1;
    const DEFAULT_PRODUCT = 0;

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
}
