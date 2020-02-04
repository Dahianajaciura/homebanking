<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Balance;

class BalanceController extends Controller
{
  public function index()
  {
      $balance = Balance::orderBy('id', 'DESC')->get();

      $salario = 0;

      foreach($balance as $item){
          $salario += $item->importe;
      }

      return view('balance')->with([
          'balance' => $balance,
          'salario' => $salario
      ]);
  }
}