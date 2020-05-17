<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shops';

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'slug',
        'description',
        'address',
        'phone',
        'email',
        'image',
        'shop_category_id'
    ];

    public function category() {
        return $this->belongsTo('App\ShopCategory', 'shop_category_id');
    }
    
    public function products() {
        return $this->hasMany('App\Product');
    }
}
