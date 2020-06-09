<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicion;
use Carbon\Carbon;


class DashboardController extends Controller
{
    

    public function index()
    {
    	

    	if(request()->session()->has('fecha1') ){
    		
    		$fecha1 = request()->session()->get('fecha1');

    	}else{

    		$fecha1 = Carbon::now()->format('Y-m-d 00:00:00');
    	}


    	if(request()->session()->has('fecha2') ){
    		
    		$fecha2 = request()->session()->get('fecha2');

    	}else{

    		$fecha2 = Carbon::now()->format('Y-m-d 23:59:59');
    	}

    	
    	$datos = Medicion::where("fecha",">=",$fecha1)
    					->where("fecha","<=",$fecha2)
    					->get();

    	

    	return view('welcome',compact([
    			'datos',
    			'fecha1',
    			'fecha2'
    	]));

    }



    public function filtro()
    {

    	request()->session()->put(['fecha1'=> request()->fecha1 ]);
    	request()->session()->put(['fecha2'=> request()->fecha2 ]);

    	return redirect('/');

    }




}
