<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacto extends Controller
{
    public function inicio(Request $request)
    {
        $contacto = $request->all();
        $acceso = "";   
        $mensaje ="";
        $tipoAlerta="";
        $recaptchaPrueba="123";

        //print_r($contacto['nombre']);
        //dd($contacto);
        
    }
}
