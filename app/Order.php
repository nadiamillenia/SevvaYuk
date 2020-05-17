<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'amount',
        'note',
        'status_id',
        'recipient_name',
        'recipient_address',
        'recipient_city',
        'recipient_province',
        'recipient_postalcode',
        'recipient_phone'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function status() {
        return $this->belongsTo('App\OrderStatus', 'status_id');
    }

    public function details() {
        return $this->hasMany('App\OrderDetail');
    }
}
