<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table='drivers';
    protected $primaryKey='id';
    protected $fillable = ['name_driver'];
    protected $dates =['created_at','updated_at'];
    //public $with = ['info_drivers'];


    public function info_drivers()
    {
        return $this->hasMany(InfoDriver::class,'drivers_id','id','foreign_key');
    }

}
