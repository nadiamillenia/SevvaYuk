<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Wishlist extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wishlists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'product_id'
    ];
}
