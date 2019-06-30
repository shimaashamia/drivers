<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable = ['product'];
    protected $dates =['created_at','updated_at'];
    //public $with = ['info_drivers'];

    public function info_drivers()
    {
        return $this->hasMany(InfoDriver::class,'products_id','id','foreign_key');
    }

}
