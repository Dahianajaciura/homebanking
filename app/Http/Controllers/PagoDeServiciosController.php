<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\pagodeservicios;

use App\balance;

class PagoDeServiciosController extends Controller
{


public function index()
{
    $pagodeservicios = pagodeservicios::orderBy('id','ASC')->get();                              
    return view('pagodeservicios', ['success' => false,'error' => ''])->with('pagodeservicios' , $pagodeservicios);
  
//return view ('pagodeservicios');
}

public function payService (Request $request){
    $service = $request-> get('service');
    $money = $request->get('money');
}

public function pagoDeServicios(Request $request) {
    
    $balances = Balance::orderBy('id', 'DESC')->get();

    $balance = 0;

    foreach($balances as $balan){
        $balance += $balan->importe;
    }
    

    if($request->importe < $balance){
        $pagodeservicios = pagodeservicios::insert(['Nombre' =>$request->nombre, 
        'Referencia' => $request->referencia,
        'Importe'=> $request->importe]);

        return view('pagodeservicios', ['success' => true] );
    }else {
        return view('pagodeservicios', ['success' => false,'error' => 'No tenes plata. Tenes '.$balance.' y quisiste pagar '.$request->importe] );
    }
}
}