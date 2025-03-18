<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("inicio");
    }

    public function home(){
        return view("home");
    }

    public function vista1(){
        return view("Vista1");
    }
    public function vista2(){
        return view("Vista2");
    }
    public function vista3(){
        return view("Vista3");
    }
}
