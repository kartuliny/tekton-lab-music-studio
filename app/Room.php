<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table="rooms";

    protected $fillable=['nombre','medida','descripcion'];

    public function reservas(){
    	return $this->hasMany('App\Reserva');
    }

}
