<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   /* public function index($action)
    { 
        if($action == "home"){
             return view("index");
        } else if($action=="balance"){
            return view("balance");
        }
        else if($action == "pagodeservicios"){
            return view("pagodeservicios");
       } else if($action == "inversiones"){
           return view("inversiones");
       } else {
           return view("index");
       }
      
    }
*/

public function index()
{

   return view ('index');
}

public function payService (Request $request){
    $service = $request-> get('service');
    $money = $request->get('money');
}

}


