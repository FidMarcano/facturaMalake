<?php

use Illuminate\Database\Seeder;

class conceptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('conceptos')->insert([
        
	    	'concepto' => 'corte'
	        
    	]);
    	
    	DB::table('conceptos')->insert([
        
	    	'concepto' => 'secado'
	        
    	]);
    	
    	DB::table('conceptos')->insert([
        
	    	'concepto' => 'planchado'
	        
    	]);

    	DB::table('conceptos')->insert([
        
	    	'concepto' => 'manicura'
	        
    	]);

    	DB::table('conceptos')->insert([
        
	    	'concepto' => 'pedicura'
	        
    	]);

    	DB::table('conceptos')->insert([
        
	    	'concepto' => 'teñido'
	        
    	]);

    	DB::table('conceptos')->insert([
        
	    	'concepto' => 'cirugia'
	        
    	]);
    }
}
