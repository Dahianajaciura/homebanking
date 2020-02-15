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
        $inversiones = inversiones::all();
        $salario = Balance::obtenerSaldo();

        return view('inversiones')->with(['inversiones' => $inversiones, 'salario' => $salario]);
    }

    public function comprarAcciones(Request $request) {
        $salario = Balance::obtenerSaldo();
        $importe = $request->acciones * inversiones::obtenerValorAccion($request->moneda);

        if ($salario->peso >= $importe) {
            if ($request->moneda == "Dolar") {            
                Balance::insert(['fecha' => date("Y-m-d H:i:s"), 'desc' => $request->operacion .": " .$request->moneda, 'importe' => -$importe, 'importe_dolar' => $request->acciones, 'importe_euro' => 0, 'created_at' => date("Y-m-d H:i:s")]);

                return response()->json(["message" => "<div class='alert-success' role='alert' style='color:#333333; text-align:center; padding:10px;'>La Compra de Dólares se ha realizado con éxito!</div>"]);
            } else {
                Balance::insert(['fecha' => date("Y-m-d H:i:s"), 'desc' => $request->operacion .": " .$request->moneda, 'importe' => -$importe, 'importe_dolar' => 0, 'importe_euro' => $request->acciones, 'created_at' => date("Y-m-d H:i:s")]);

                return response()->json(["message" => "<div class='alert-success' role='alert' style='color:#333333; text-align:center; padding:10px;'>La Compra de Euros se ha realizado con éxito!</div>"]);
            }
        } else {
           return response()->json(["message" => "<div class='alert-danger' role='alert' style='color:#333333; text-align:center; padding:10px;'>No tienes saldo suficiente para Comprar!</div>"]);  
        }
    }

    public function venderAcciones(Request $request) {
        $saldo = Balance::obtenerSaldo();
        $importe = $request->acciones * inversiones::obtenerValorAccion($request->moneda);

        if ($request->moneda == "Dolar") {
            if ($request->acciones <= $saldo->dolar) {
                Balance::insert(['fecha' => date("Y-m-d H:i:s"), 'desc' => $request->operacion .": " .$request->moneda, 'importe' => $importe, 'importe_dolar' => -$request->acciones, 'importe_euro' => 0, 'created_at' => date("Y-m-d H:i:s")]);

                return response()->json(["message" => "<div class='alert-success' role='alert' style='color:#333333; text-align:center; padding:10px;'>La Venta de Dólares se ha realizado con éxito!</div>"]);
            } else {
                return response()->json(["message" => "<div class='alert-danger' role='alert' style='color:#333333; text-align:center; padding:10px;'>No tienes suficientes Acciones para Vender!</div>"]);
            }
        } else {
            if ($request->acciones <= $saldo->euro) {
                Balance::insert(['fecha' => date("Y-m-d H:i:s"), 'desc' => $request->operacion .": " .$request->moneda, 'importe' => $importe, 'importe_dolar' => 0, 'importe_euro' => -$request->acciones, 'created_at' => date("Y-m-d H:i:s")]);

                return response()->json(["message" => "<div class='alert-success' role='alert' style='color:#333333; text-align:center; padding:10px;'>La Venta de Euros se ha realizado con éxito!</div>"]);
            } else {
                return response()->json(["message" => "<div class='alert-danger' role='alert' style='color:#333333; text-align:center; padding:10px;'>No tienes suficientes Acciones para Vender!</div>"]);
            }
        }
    }
}