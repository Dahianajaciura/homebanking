<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Balance extends Model
{
   
 protected $table = "balance";

 static function obtenerSaldo() {
    $saldo = DB::select("SELECT SUM(importe) AS peso, SUM(importe_dolar) AS dolar, SUM(importe_euro) AS euro FROM balance");

    if ($saldo[0]->peso == "") {
        $saldo = 0;
    } else {
        $saldo = $saldo[0];
    }

    return $saldo;
}

}
