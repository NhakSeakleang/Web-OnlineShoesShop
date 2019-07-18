<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesModel extends Model
{
    //
    protected $table='images';
    protected $fillable=[
        'id','path','detail'
    ];

    public function shoe()
    {
        return $this->belongsToMany(ShoeModel::class,'shoe_detail','images_id','shoe_id');
    }
    
}
