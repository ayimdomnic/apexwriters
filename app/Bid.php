<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ['user_id','order_id','bid_statement','status'];


    protected $dates = 'created_at';


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        $this->belongsTo(Orders::class);
    }
}
