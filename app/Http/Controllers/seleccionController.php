<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class seleccionController extends Controller
{
    public function index(Request $request)
    {
    	if (isset($request->registrar)) {

    		
    		return view::make('home')->with(['n'=>2]);
    	
    	}
    	if (isset($request->descargar)) {
    		echo "Descargar";
    	}
    	if (isset($request->registros)) {
    		echo "Registros";
    	}
    	if (isset($request->usuarios)) {
    		echo "Usuarios";
    	}
    	

    }
}
