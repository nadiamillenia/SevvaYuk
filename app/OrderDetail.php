<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 
        'product_id',
        'quantity'
    ];

    public function order() {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function product() {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
