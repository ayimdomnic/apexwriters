<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =[
        'sender_id',
        'recipient_id',
        'order_id',
        'body',
        'title'];

    protected $dates = 'created_at';


    public function order()
    {
        $this->belongsTo(Orders::class);
    }

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function bid()
    {
        return $this->belongsTo(Bid::class);
    }

}
