<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Reporte extends Model
{
    static function Anos()
    {
    	$now = Carbon::now();		
		$resultados = DB::table('registros')->where('ano', $now->year)->paginate(10);

		return $resultados;
	}

    static function Meses()
    {
    	$now = Carbon::now();		
		$resultados = DB::table('registros')->where('mes', $now->month)->paginate(10);

		return $resultados;
    }

    static function Semana()
    {
    	$now = Carbon::now();		
		$resultados = DB::table('registros')->where('semana', $now->weekOfYear)->paginate(10);

		return $resultados;
		
    }

    static function Dia()
    {
    	$now = Carbon::now();		
		$resultados = DB::table('registros')->where('dia', $now->day)->paginate(10);

		return $resultados;
    }

    static function validarFechas($men, $may)
    {	
    	$resultados = 1;
    	    	
    	$min = DB::table('registros')->orderBy('fecha')->first();
    	$max = DB::table('registros')->orderBy('fecha', 'DESC')->first();

    	$dtMin = Carbon::create($min->ano, $min->mes, $min->dia, 0, 0, 0);
    	$dtMax = Carbon::create($max->ano, $max->mes, $max->dia, 0, 0, 0);
    	$dtMini = $dtMin->toDateString();
    	$dtMaxi = $dtMax->toDateString(); 

        if ($dtMini > $men || $dtMaxi < $may)
        {
        	$resultados = 0;
        }

		return $resultados;
    }

    static function Personalizado($min, $max)
    {
    	$resultados = DB::table('registros')->whereBetween('fecha', [$min, $max])->get();
    	return $resultados;
    }

  


}
