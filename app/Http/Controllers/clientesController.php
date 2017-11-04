<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;
use View;


class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cliente = Cliente::verificarCedula($request->cedula);

        $metodos = DB::table('metodos')->get();
        $conceptos = DB::table('conceptos')->get();
        $usuarios = DB::table('users')->get();

        if (empty($cliente)){
            return view::make('home')->with(['cedula'=> $request->cedula, 'o' => 0,'metodos'=>$metodos,'usuarios'=>$usuarios, 'n'=>3, 'cliente' => $cliente, 'conceptos'=> $conceptos]);
        }else{
            return view::make('home')->with(['cedula'=> $request->cedula, 'o' => 1,'metodos'=>$metodos,'usuarios'=>$usuarios, 'n'=>3, 'cliente' => $cliente, 'conceptos'=> $conceptos]);
        }
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
