<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarteModel extends Model
{
   protected $table='carte_detail';
    //
    protected $fillable=[
        'user_id','shoe_detail_id','qty','detail'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
