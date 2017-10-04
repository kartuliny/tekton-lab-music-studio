<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(Request $request){
    	
    	//$a=session()->put('user_id', 1);
    	//$a=session()->put('email', 'lvilcapumas');
    	/*$a= $request->session(['user_id' => 1],['email'=>'lvilcapumas8@gmail.com']);
    	$a=$request->session()->push('user_id', '1');
    	$a=$request->session()->push('email', 'lvilcapums8@gmail.omm');*/
    	//$a=$request->session(['id_user' => 1,'email'=>'lvilcapumas8']);
    	//$a=$request->session()->put('id_user', 1);
    	
    	//session(['sessionluki' => 'los mejores']);
    	

    	return view('main.studio');
    }
}
