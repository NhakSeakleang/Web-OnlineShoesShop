<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    protected $table='review';
    //
    protected $fillable=[
        'user_id','shoe_id','rate','review','detail'
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function shoe()
    {
        return $this->belongsTo(ShoeModel::class,'shoe_id');
    }
}
