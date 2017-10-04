<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReserva extends Model
{
    protected $table="detallereservas";
    protected $fillable=['instrumento_id','reserva_id','cantidad','precio'];

    public $timestamps = false;
    
    public function reserva(){
    	return $this->belongsTo('App/Reserva');
    }
    public function instrumento(){
    	return $this->belongsTo('App\Instrumento');
    }
}
