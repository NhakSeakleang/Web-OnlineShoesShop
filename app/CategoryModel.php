<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
    protected $table='category';
    protected $fillable=[
        'id','name','detail'
    ];

    public function shoe()
    {
        return $this->hasMany(ShoeModel::class,'category_id');
    }
}
