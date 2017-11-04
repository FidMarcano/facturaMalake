<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Cliente extends Model
{
    static function verificarCedula($cedula)
    {
    	$cliente = DB::table('clientes')->where('cedula',$cedula)->first();

        return $cliente;
    }

    static function registrarCliente($cedula,$nombre,$apellido,$direccion,$telefono)
    {
    	DB::table('clientes')->insert([
    		'cedula'=>$cedula,
    		'nombre'=>$nombre,
    		'apellido'=>$apellido,
    		'direccion'=>$direccion,
    		'telefono'=>$telefono
    	]);
    }
}
