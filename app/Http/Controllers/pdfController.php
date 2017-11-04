<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\PDF;
use aPDF;

class pdfController extends Controller
{
    public function factura(Request $request)
    {	
    	$metodos=DB::table('metodos')->get();
    	$conceptos = DB::table('conceptos')->get();
    	$cliente = DB::table('clientes')->where('id',$request->cliente)->first();
    	$ingreso = DB::table('registros')->where('id',$request->ingreso)->first();

    	$pdf = aPDF::loadView('pdf.factura', ['cliente' => $cliente, 'ingreso'=>$ingreso,'metodos'=>$metodos,'conceptos'=>$conceptos]);
    	
    	return $pdf->download('f_'.$cliente->cedula.'_'.$ingreso->fecha.'.pdf');
    }
}
