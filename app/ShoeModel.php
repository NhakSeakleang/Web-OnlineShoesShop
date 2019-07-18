<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeModel extends Model
{
    //
    protected $table='shoe';

    protected $fillable=[
        'id','category_id','grade_id','detail'
    ];

    public function review()
    {
        return $this->hasMany(ReviewModel::class,'shoe_id');
    }
    public function category()
    {
        return $this->belongsTo(CategoryModel::class,'category_id');
    }
    public function grade()
    {
        return $this->belongsTo(GradeModel::class,'grade_id');
    }
    public function images()
    {
        return $this->belongsToMany(ImagesModel::class,'shoe_detail','shoe_id','images_id');
    }
    public function color()
    {
        return $this->belongsToMany(ColorModel::class,'shoe_detail','shoe_id','color_id');
    }
    public function size()
    {
        return $this->belongsToMany(SizeModel::class,'shoe_detail','shoe_id','size_id');
    }
    public function price()
    {
        return $this->belongsToMany(PriceModel::class,'shoe_detail','shoe_id','price_id');
    }
    public function discount()
    {
        return $this->belongsToMany(DiscountModel::class,'shoe_detail','shoe_id','discount_id');
    }
    public function stock()
    {
        return $this->belongsToMany(stock::class,'shoe_detail','shoe_id','stock_id');
    }

}
