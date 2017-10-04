<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrumento;
use App\Category;
class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instru=Instrumento::orderBy('id','ASC')->get();
        $cate=Category::orderBy('id','ASC')->get();
        return view('sala.instrumentos')->with('instrumentos',$instru)->with('cate',$cate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instru = new Instrumento($request->all());
        $instru->category;
        $instru->save();
        
        return response()->json($instru);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $instru=Instrumento::find($id);
       $instru->category;
       return response()->json($instru);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instru= Instrumento::find($id);
        $instru->fill($request->all());
        $instru->save();
        $instru->category;

        return response()->json($instru);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instru=Instrumento::find($id);
        $instru->delete();
        
        return response()->json($instru);
    }
}
