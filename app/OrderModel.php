<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    //
    protected $table='order';
    protected $fillable=[
        'id','user_id','ship_by','status','detail'
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function shoe_detail()
    {
        return $this->belongsToMany(shoeDetailModel::class,'orderdetail','order_id','shoe_detail_id');
    }
}
