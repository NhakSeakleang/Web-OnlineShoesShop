<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    protected $table='price';
    protected $fillable=[
        'id','amount','detail'
    ];
    //
    public function shoe()
    {
        return $this->belongsToMany(ShoeModel::class,'shoe_detail','price_id','shoe_id');
    }
}
