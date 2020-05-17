<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

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
        'shop_id', 
        'name',
        'slug',
        'stock',
        'price',
        'description',
        'image',
        'product_category_id'
    ];

    public function shop() {
        return $this->belongsTo('App\Shop', 'shop_id');
    }

    public function category() {
        return $this->belongsTo('App\ProductCategory', 'product_category_id');
    }

    public function wishlists() {
        return $this->hasManyThrough('App\Wishlist', 'App\User');
    }

    public function carts() {
        return $this->hasManyThrough('App\Cart', 'App\User');
    }

    public function orders() {
        return $this->hasManyThrough('App\OrderDetail', 'App\Order');
    }
}
