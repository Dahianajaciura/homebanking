<?php

namespace App\Http\Controllers;
use App\inversiones;
use App\Balance;
use App\Login;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{  
    public function index()
    {
        $login = Login::orderBy('id', 'DESC')->get();
        return view('login');
    }

}