<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $table='stock';
    protected $fillable=[
        'id','avaiable','detail'
    ];
    //
    public function shoe()
    {
        return $this->belongsToMany(ShoeModel::class,'shoe_detail','stock_id','shoe_id');
    }
}
