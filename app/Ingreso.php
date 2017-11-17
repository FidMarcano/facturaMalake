<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingreso;
use Carbon\Carbon;
use DB;

class Ingreso extends Model
{
    static function registrarIngreso($costo,$metodo,$trabajador, $cliente, $concepto)
    {	
    	$IVA = Ingreso::iva($costo, $metodo);
    	$neto = Ingreso::Neto($costo, $IVA);
    	$PE = Ingreso::parteEstilista($neto);
    	$PL = Ingreso::parteLocal($neto);
        $Ano = Ingreso::Ano();
        $Mes = Ingreso::Mes();
        $Dia = Ingreso::Dia();
        $Semana = Ingreso::Semana();
        
    	
    	$fecha = Carbon::now()->toDateString();
        $id = DB::table('registros')->insertGetId([

    		'id_estilista'=>$trabajador,
    		'costo'=>$costo,
    		'neto'=>$neto,
    		'parte_estilista'=>$PE,
    		'parte_local'=>$PL,
    		'iva'=>$IVA,
    		'id_concepto'=> $concepto,
            'id_metodo'=> $metodo,
    		'id_cliente'=> $cliente,
    		'fecha'=>$fecha,
            'ano'=>$Ano,
            'mes'=>$Mes,
            'dia'=>$Dia,
            'semana'=>$Semana

       	]);

       	return $id;
    }





    static function parteEstilista($costo)
    {
    	$PE = $costo * 0.30;

    	return $PE;
    }

    static function parteLocal($costo)
    {
    	$PL = $costo * 0.70;

    	return $PL;
    }

    static function Neto($costo, $iva )
    {
    	$neto = $costo - $iva;
    	return $neto;
    }

    static function iva($costo, $metodo)
    {
    	$iva = 0;

    	if ($metodo == 2 || $metodo == 3) {
    		$iva = $costo * 0.09;
    	}else{
    		$iva = $costo * 0.12;
    	}

    	return $iva;
    }

    static function Ano()
    {
        $now = Carbon::now();
        return $now->year;
    }

    static function Mes()
    {
        $now = Carbon::now();
        return $now->month;
    }

    static function Dia()
    {
        $now = Carbon::now();
        return $now->day;
    }

    static function Semana()
    {
        $now = Carbon::now();
        return $now->weekOfYear;
    }
}
