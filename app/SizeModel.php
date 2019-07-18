<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeModel extends Model
{
    protected $table='size';
    protected $fillable=[
        'id','size','detail'
    ];
    public function shoe()
    {
        return $this->belongsToMany(ShoeModel::class,'shoe_detail','color_id','shoe_id');
    }
    //
}
