<?php

namespace App\Http\Controllers;
use App\inversiones;
use App\Balance;
use Session;
use Illuminate\Http\Request;

class InversionesController extends Controller
{  
    public function index()
    {
        $inversiones = Inversiones::all();
        $salario = $this->getSalario(0);

        foreach($inversiones as $inv){
            $operacion = rand(1, 3);

            if($operacion == 1){
                $inv->valor = $inv->valor / 2;
            } else {
                $inv->valor = $inv->valor * 2;
            }

            $inv->save();
        }

        return view('inversiones')->with(['inversiones' => $inversiones, 'salario' => $salario]);
    }

    public function getSalario($dinero){
        $balance = Balance::all();
        $salario = 0;

        foreach($balance as $item){
            $salario += $item->importe;
        }

        $salario -= $dinero;

        return $salario;
    }

    public function comprar($id){
        $inv = Inversiones::find($id);

        if($inv->acciones > 0){
            $salario = $this->getSalario(0);

            if($salario >= $inv->valor){
                $inv->acciones -= 1;
                $inv->save();

                $balance = new Balance();

                $balance->fecha = date('Y-m-d');
                $balance->desc = "Compra de Accion: " . $inv->empresa;
                $balance->importe = $inv->valor * -1;
                $balance->save();

                Session::flash('payMsg', 'Se compro una accion de la empresa ' . strtoupper($inv->empresa));
                Session::flash('alertClass', 'alert-primary');
            } else {

                Session::flash('payMsg','No tienes suficiente dinero en la cuenta!');
                Session::flash('alertClass','alert-danger');
            }
        } else {

            Session::flash('payMsg','No hay acciones para comprar!');
            Session::flash('alertClass','alert-danger');
        }
        return redirect()->route('inversiones');
    }

    public function vender($id){
        $inv = Inversiones::find($id);

        if($inv->acciones > 0){
            if($inv->acciones >= $inv->total){
               Session::flash('payMsg','No tenes acciones compradas!');
               Session::flash('alertClass','alert-danger');
            }

            $salario = $this->getSalario($inv->valor);

            if($salario >= 0){
                $inv->acciones += 1;
                $inv->save();

                $balance = new Balance();

                $balance->fecha = date('Y-m-d');
                $balance->desc = "Venta de Accion: " . $inv->empresa;
                $balance->importe = $inv->valor;
                $balance->save();



                Session::flash('payMsg',"Se vendio una accion de la empresa " . strtoupper($inv->empresa));
                Session::flash('alertClass', 'alert-primary');
            } else {

                Session::flash('payMsg','No tienes suficiente dinero en la cuenta!');
                Session::flash('alertClass','alert-danger');
            }

        } else {

            Session::flash('payMsg','No hay acciones para vender!');
            Session::flash('alertClass','alert-danger');
        }
        return redirect()->route('inversiones');
    }

}

/* 

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

} */


