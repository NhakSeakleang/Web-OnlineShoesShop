<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscountModel extends Model
{
    //
    protected $table='discount';
    protected $fillable=[
        'id','percentage','detail'
    ];
    public function shoe()
    {
        return $this->belongsToMany(ShoeModel::class,'shoe_detail','discount_id','shoe_id');
    }
}
