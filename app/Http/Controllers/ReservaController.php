<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Reserva;
use App\Room;
use App\DetalleReserva;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index(){

    	/*$reserva=DB::table('rooms')
    					->join('reservas', 'rooms.id', '=', 'reservas.id')
    					->select('rooms.nombre')
    					->where('reservas.inicio_ensayo','>','2017-09-30 7:21:00')
    					->where('reservas.fin_ensayo','<' ,'2017-09-30 7:21:00')
    					->get();*/
    	
    	return view('sala.reserva');

    } 

    public function busqueda(Request $request){

    	$date=$request->date;
    	//$reserva=DB::select("SELECT a.nombre, a.descripcion FROM `reservas` b INNER JOIN `rooms` a ON b.room_id=a.id WHERE b.inicio_ensayo != '".$date."' AND '".$date."' NOT BETWEEN Cast(b.inicio_ensayo as DateTime) AND Cast(b.fin_ensayo as DateTime) ");
    	$reserva=DB::table('rooms')
    					->join('reservas','rooms.id','=','reservas.room_id')
    					->select('rooms.nombre','rooms.descripcion','rooms.id')
    					/*->where('reservas.inicio_ensayo','>',$date)
    					->orWhere('reservas.fin_ensayo','<' ,$date)*/
                        ->whereRaw('"'.$date.'"  NOT BETWEEN Cast(inicio_ensayo as DateTime) AND Cast(fin_ensayo as DateTime)')
    					->get();
        $reserva=$reserva->unique();
    	return response()->json($reserva);
    }
    public function busqueda2(Request $request){
        $date=$request->date;
        $reserva=DB::table('rooms')
                        ->leftJoin('reservas','rooms.id','=','reservas.room_id')
                        ->select('rooms.nombre','rooms.descripcion','rooms.id')
                        ->whereNull('reservas.room_id')
                        ->get();

        return response()->json($reserva);
    }
    public function getInstrumento(Request $request){
        $instrumentos= DB::table('instrumentos')
                            ->select('instrumentos.nombre','instrumentos.id')
                            ->get();
        return response()->json($instrumentos);
    }
    public function guardar(Request $request){

        $reserva=new Reserva($request->all());
       
        $reserva->save();
        $reserva->id;
       
        return response()->json($reserva);
    }
    public function detalle(Request $request){

        $detalle= new DetalleReserva($request->all());
        $detalle->save();

       /* $data=array(
            'name'=>'Luki',
        );
        Mail::send('sala.reserva', $data, function ($message) {
        $message->from('lvilcapumas8@gmail.com', 'Confirmacion de Reserva!');
        
    
        $message->to('lvilcapumas8@gmail.com');
        $message->subject('welcone');
        
    });*/

        return response()->json($detalle);
    }

    public function sendEmail(Request $request){
        
        $id=$request->id;
        $email=$request->email;
        
        $send=DB::table('reservas')
                    ->join('rooms','reservas.room_id','=','rooms.id')
                    ->join('detallereservas','reservas.id', '=' , 'detallereservas.reserva_id')
                    ->join('instrumentos','detallereservas.instrumento_id', '=', 'instrumentos.id')
                    ->select('instrumentos.nombre','rooms.nombre','reservas.horas','reservas.inicio_ensayo','reservas.fin_ensayo','reservas.costo','detallereservas.cantidad')
                    ->where('reservas.id','=', $id )
                    ->get();
        $dato=array(
            'cuerpo'=>'BIENVENIDO A MUSIC STUDIO',
            );
        Mail::send('pruebas',$dato, function ($message) {
        $message->from('lvilcapumas8@gmail.com', 'Confirmacion de Reserva!');
        
    
        //$message->to(''.$email.'');
        $message->to('lvilcapumas8@gmail.com');
        $message->subject('MUSIC STUDIO - Sala Reserva');
    });

         return response()->json($send);
    }

}
