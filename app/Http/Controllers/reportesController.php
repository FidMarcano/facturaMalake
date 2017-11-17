<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;
use App\Reporte;

class reportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view::make('home')->with(['n'=>5, 'n1' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->opcion == 0) {
            return back();
        }elseif ($request->opcion == 1) {

            $usuarios = DB::table('users')->get();
            $clientes = DB::table('clientes')->get();
            $resultados = Reporte::Anos();
            return view::make('home')->with(['n'=>5, 'n1' => 1,'n2'=>0, 'resultados'=>$resultados, 'clinetes' => $clientes, 'usuarios'=> $usuarios]);

        }elseif ($request->opcion == 2) {
            
            $usuarios = DB::table('users')->get();
            $clientes = DB::table('clientes')->get();
            $resultados = Reporte::Meses();
            return view::make('home')->with(['n'=>5, 'n1' => 2,'n2'=>0, 'resultados'=>$resultados, 'clinetes' => $clientes, 'usuarios'=> $usuarios]);
        
        }elseif ($request->opcion == 3) {
            
            $usuarios = DB::table('users')->get();
            $clientes = DB::table('clientes')->get();
            $resultados = Reporte::Semana();
            return view::make('home')->with(['n'=>5, 'n1' => 3,'n2'=>0, 'resultados'=>$resultados, 'clinetes' => $clientes, 'usuarios'=> $usuarios]);
        
        }elseif ($request->opcion == 4) {
            
            $usuarios = DB::table('users')->get();
            $clientes = DB::table('clientes')->get();
            $resultados = Reporte::Dia();
            return view::make('home')->with(['n'=>5, 'n1' => 4,'n2'=>0, 'resultados'=>$resultados, 'clinetes' => $clientes, 'usuarios'=> $usuarios]);
        
        }elseif ($request->opcion == 5) {
            $min = DB::table('registros')->orderBy('fecha')->first();
            $max = DB::table('registros')->orderBy('fecha', 'DESC')->first();
            return view::make('home')->with(['n'=>5, 'n1' => 5,'n2'=>0, 'min' => $min, 'max' => $max]);
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
