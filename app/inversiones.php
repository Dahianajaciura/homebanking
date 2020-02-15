<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inversiones extends Model
{
    protected $table = "inversiones";

    static function obtenerValorAccion($moneda) {
    	$saldo = DB::select("SELECT valor FROM inversiones WHERE moneda LIKE '" .$moneda. "'");

    	return $saldo[0]->valor;
    }
}
