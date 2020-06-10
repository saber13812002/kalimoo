<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class Product extends Model
{
    protected $guarded = [];

    public function main()
    {
        return $this->belongsTo(MainCategory::class , 'main_category_id');
    }

    public function second()
    {
        return $this->belongsTo(SecondaryCategory::class , 'secondary_category_id');
    }

    public function third()
    {
        return $this->belongsTo(ThirdCategory::class , 'third_category_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public static function boot()
    {
        parent::boot();
        static::created(function (){
            Cache::forget('products');
        });

        static::updated(function (){
            Cache::forget('products');
        });

        static::deleted(function (){
            Cache::forget('products');
        });
    }
}
