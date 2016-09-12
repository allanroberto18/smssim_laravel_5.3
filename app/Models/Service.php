<?php

namespace SMSSim\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Service extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name', 'description', 'price', 'status'
    ];

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = str_replace(',','.', preg_replace('#[^\d\,]#is','',$value));
    }

    public function getPriceAttribute()
    {
        return number_format($this->attributes['price'], 2, ",", ".");
    }
}