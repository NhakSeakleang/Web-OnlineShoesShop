<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeModel extends Model
{
    protected $table='grade';
    protected $fillable=[
        'id','name','detail'
    ];
    //
    public function shoe()
    {
        return $this->hasMany(ShoeModel::class,'grade_id');
    }
}
