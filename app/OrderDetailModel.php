<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    //
    protected $table='orderdetail';
    protected $fillable=[
        'id','order_id','shoe_detail_id','qty'
    ];
    // public function shoe_detail()
    // {
    //     return $this->belongsTo(shoeDetailModel::class,'shoe_detail_id');
    // }
}
