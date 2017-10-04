<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento extends Model
{
    protected $table="instrumentos";
    protected $fillable=['nombre','category_id','stock','descripcion'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function detallereservas(){
    	return $this->hasMany('App\DetalleReserva');
    }
    

}
