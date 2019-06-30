<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class InfoDriver extends Model
{
    protected $table='info_drivers';
    protected $primaryKey='id';
    protected $fillable = ['price','quantity', 'stauts','products_id','drivers_id'];
    protected $dates =['created_at','updated_at'];

    public function Product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function Driver()
    {
        return $this->belongsTo(Driver::class,'drivers_id','id');
    }

}
