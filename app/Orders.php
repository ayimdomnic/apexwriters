<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'title',
        'word_length',
        'subject',
        'academic_level',
        'deadline',
        'total',
        'style',
        'attachment',
        'no_of_sources',
        'instructions',
        'essential_sources',
        'suggested_sources'
    ];

    protected $guarded =['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }



}



