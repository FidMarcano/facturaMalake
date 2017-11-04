<?php

use Illuminate\Database\Seeder;

class metodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('metodos')->insert([
        
	    	'metodo' => 'efectivo'
	        
    	]);
    	
    	DB::table('metodos')->insert([
        
	    	'metodo' => 'punto de venta'
	        
    	]);
    	
    	DB::table('metodos')->insert([
        
	    	'metodo' => 'transferencia'
	        
    	]);

    	DB::table('metodos')->insert([
        
	    	'metodo' => 'cheque'
	        
    	]);
    }
}
