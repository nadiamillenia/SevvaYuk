<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'pembayaran', 'start', 'end', 'total', 'status'
    
    
    ];

   
}
