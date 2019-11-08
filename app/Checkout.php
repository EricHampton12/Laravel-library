<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = ["book_id", "user_id"];

    public function checkOut()
    {
        return $this->belongsTo('App\Checkout');
    }
    
}
