<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\pagodeservicios;

class PagoDeServiciosController extends Controller
{


public function index()
{
    $pagodeservicios = pagodeservicios::orderBy('id','ASC')->get();                              
    return view('pagodeservicios')->with('pagodeservicios' , $pagodeservicios);
  
//return view ('pagodeservicios');
}

public function payService (Request $request){
    $service = $request-> get('service');
    $money = $request->get('money');
}

public function pagoDeServicios(Request $request) {
    $pagodeservicios = pagodeservicios::insert(['Nombre' =>$request->nombre, 
    'Referencia' => $request->referencia,
    'Importe'=> $request->importe]);

    return view('pagodeservicios');
}

}


