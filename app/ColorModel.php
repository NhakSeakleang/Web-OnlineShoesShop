<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    //
    protected $table='color';
    protected $fillable=[
        'id','color','detail'
    ];
    public function shoe()
    {
        return $this->belongsToMany(ShoeModel::class,'shoe_detail','size_id','shoe_id');
    }
    
}
