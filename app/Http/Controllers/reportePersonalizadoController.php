<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Reporte;
use Carbon\Carbon;

class reportePersonalizadoController extends Controller
{
    public function index(Request $request)
    {
	    $fecha1 = Carbon::createFromFormat('Y-m-d',$request->fecha1 )->toDateString();
	    $fecha2 = Carbon::createFromFormat('Y-m-d',$request->fecha2 )->toDateString();

	    if ($fecha2 < $fecha1) {
	    	return back();
	    }else{

	    	$validar = Reporte::validarFechas($fecha1, $fecha2);

	    	if ($validar == 1){
	    		$usuarios = DB::table('users')->get();
 		        $clientes = DB::table('clientes')->get();
	    		$resultados = Reporte::Personalizado($fecha1, $fecha2);
	    		$min = DB::table('registros')->orderBy('fecha')->first();
	            $max = DB::table('registros')->orderBy('fecha', 'DESC')->first();
	            return view::make('home')->with(['n'=>5, 'n1' => 5,'n2'=>1, 'min' => $min, 'max' => $max, 'resultados'=>$resultados, 'clinetes' => $clientes, 'usuarios'=> $usuarios]);

	    	}elseif($validar == 0){
	    		return back();
	    	}

	    	
	    }

    }
}
