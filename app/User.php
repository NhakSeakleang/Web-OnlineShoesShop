<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'user_name','email','password','tokent',
        'position','phone_name','city','country','address','ip','last_active',
        'detail','shoe_detail_id','ship_by','status','qty','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table='users';

    public function order()
    {
        return $this->hasMany(OrderModel::class,'user_id');
    }
    public function carte()
    {
        return $this->hasMany(CarteModel::class,'user_id');
    }
    public function review()
    {
        return $this->hasMany(ReviewModel::class,'user_id');
    }



}
