<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator extends Controller
{
    public function home(){
        return view('/home1');
    }
    
    public function kalkulator1(){
        return view('/kalkulator1');
    }

    public function kalkulator2()
    {
        return view('/kalkulator2');
    }
}
