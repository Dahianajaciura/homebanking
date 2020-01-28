<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pagodeservicios;
class PagoDeServiciosController extends Controller
{


public function index()
{
    $pagodeservicios = pagodeservicios::insert(['Nombre' =>'feo',
    'Referencia' => '22',
    'Importe'=> '88']);

$pagodeservicios = pagodeservicios::orderBy('id','ASC')->get();                              
return view('pagodeservicios')->with('pagodeservicios' , $pagodeservicios);
  
//return view ('pagodeservicios');
}

public function payService (Request $request){
    $service = $request-> get('service');
    $money = $request->get('money');
}

}


