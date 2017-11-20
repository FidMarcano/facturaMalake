<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Reporte;
use App\PDF;
use Carbon\Carbon;
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

    public function reporteAnual(Request $request)
    {   
        $metodos=DB::table('metodos')->get();
        $clientes = DB::table('clientes')->get();
        $conceptos = DB::table('conceptos')->get();
        $now = Carbon::now();       
        $fecha = $now->year;
        $resultados = Reporte::Anos();
        $pdf = aPDF::loadView('pdf.reportes', ['resultados' => $resultados, 'metodos'=>$metodos, 'clientes' => $clientes, 'conceptos'=> $conceptos, 'fecha'=> $fecha]);
        
        return $pdf->download('ra_'.$fecha.'.pdf');
    }

    public function reporteMensual(Request $request)
    {   

        $metodos=DB::table('metodos')->get();
        $clientes = DB::table('clientes')->get();
        $conceptos = DB::table('conceptos')->get();
        $now = Carbon::now();       
        $fecha = $now->month;
        $resultados = Reporte::Meses();
        $pdf = aPDF::loadView('pdf.reportes', ['resultados' => $resultados, 'metodos'=>$metodos, 'clientes' => $clientes, 'conceptos'=> $conceptos, 'fecha'=> $fecha]);
        
        if ($fecha == 1) {
            $mes = "enero";
        }elseif ($fecha == 2) {
            $mes = "febrero";
        }elseif ($fecha == 3) {
            $mes = "marzo";
        }elseif ($fecha == 4) {
            $mes = "abril";
        }elseif ($fecha == 5) {
            $mes = "mayo";
        }elseif ($fecha == 6) {
            $mes = "junio";
        }elseif ($fecha == 7) {
            $mes = "julio";
        }elseif ($fecha == 8) {
            $mes = "agosto";
        }elseif ($fecha == 9) {
            $mes = "septiembre";
        }elseif ($fecha == 10) {
            $mes = "octubre";
        }elseif ($fecha == 11) {
            $mes = "noviembre";
        }elseif ($fecha == 12) {
            $mes = "diciembre";
        }

        return $pdf->download('rm_'.$mes.'.pdf');
    }

    public function reporteSemanal(Request $request)
    {   

        $metodos=DB::table('metodos')->get();
        $clientes = DB::table('clientes')->get();
        $conceptos = DB::table('conceptos')->get();
        $now = Carbon::now();       
        $fecha = $now->weekOfYear;
        $resultados = Reporte::Semana();
        $pdf = aPDF::loadView('pdf.reportes', ['resultados' => $resultados, 'metodos'=>$metodos, 'clientes' => $clientes, 'conceptos'=> $conceptos, 'fecha'=> $fecha]);
        
        return $pdf->download('rs_semana_'.$fecha.'.pdf');
    }

    public function reporteDia(Request $request)
    {   

        $metodos=DB::table('metodos')->get();
        $clientes = DB::table('clientes')->get();
        $conceptos = DB::table('conceptos')->get();
        $now = Carbon::now();
        $fecha =  $now->day.'/'.$now->month.'/'.$now->year;
        $resultados = Reporte::Dia();
        $pdf = aPDF::loadView('pdf.reportes', ['resultados' => $resultados, 'metodos'=>$metodos, 'clientes' => $clientes, 'conceptos'=> $conceptos, 'fecha'=> $fecha]);
        
        return $pdf->download('rd_'.$now->day.'/'.$now->month.'/'.$now->year.'.pdf');
    }

    public function reportePersonalizado(Request $request)
    {   

        $metodos=DB::table('metodos')->get();
        $clientes = DB::table('clientes')->get();
        $conceptos = DB::table('conceptos')->get();
        $now = Carbon::now();
        $fecha =  $now->day.'/'.$now->month.'/'.$now->year;
        $resultados = Reporte::Personalizado($request->fecha1, $request->fecha2);
        $pdf = aPDF::loadView('pdf.reportes', ['resultados' => $resultados, 'metodos'=>$metodos, 'clientes' => $clientes, 'conceptos'=> $conceptos, 'fecha'=> $fecha]);
        
        return $pdf->download('rp_'.$request->fecha1.'-'.$request->fecha2.'.pdf');
    }
}
