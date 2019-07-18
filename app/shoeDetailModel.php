<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoeDetailModel extends Model
{
    //
    protected $table='shoe_detail';
    protected $fillable=[
        'id','shoe_id','images_id','color_id','size_id','price_id','discount_id','stock_id','detail'
    ];
    public function order()
    {
        return $this->belongsToMany(OrderModel::class,'orderdetail','shoe_detail_id','order_id');
    }
}
