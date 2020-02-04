<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
   return view ('index');
}

/* public function payService (Request $request){
    $service = $request-> get('service');
    $money = $request->get('money');
} */

}


