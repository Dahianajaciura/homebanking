<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inversiones;
class InversionesController extends Controller
{


public function index()
{
    $inversiones = inversiones::insert(['Empresa' =>'feo',
    'Acciones' => '22',
    'Valor'=> '88']);

$inversiones = inversiones::orderBy('id','ASC')->get();                              
return view('inversiones')->with('inversiones' , $inversiones);
   //return view ('inversiones');
}

public function payService (Request $request){
    $service = $request-> get('service');
    $money = $request->get('money');
}

}


