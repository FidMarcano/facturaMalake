<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Ingreso;
use App\Cliente;
use aPDF;

class ingresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
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

        if ($request->metodo == 0 || $request->usuario == 0) {
            return back();
        }
        if ($request->o == 0) {
            Cliente::registrarCliente($request->cedula, $request->nombre, $request->apellido, $request->direccion, $request->telefono);
        }
        
        $cliente = DB::table('clientes')->where('cedula', $request->cedula)->first();
        
        $id = Ingreso::registrarIngreso($request->costo, $request->metodo, $request->usuario, $cliente->id, $request->concepto);
        $ingreso = DB::table('registros')->where('id', $id)->first();

        $metodos = DB::table('metodos')->get();
        $conceptos = DB::table('conceptos')->get();
        

        return view::make('home')->with(['n'=>4, 'cliente'=>$cliente, 'ingreso' => $ingreso, 'metodos'=> $metodos, 'conceptos'=> $conceptos]);
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
