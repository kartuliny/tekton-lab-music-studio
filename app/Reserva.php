<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table="reservas";
    protected $fillable=['user_id','room_id','horas','inicio_ensayo','fin_ensayo','costo','observacion'];

    public function room(){
    	return $this->belongsTo('App\Room');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function detallereservas(){
    	return $this->hasMany('App\DetalleReserva');
    }

}
