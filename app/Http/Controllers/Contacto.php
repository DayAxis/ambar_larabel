<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacto extends Controller
{
    public function index (Request $request)
    {
        echo "hola";
        $contacto = $request->all();
        dd($contacto);
        //$numero_pedido = $pedido['numero_pedido'];
        //$pedido['cliente']['email']
        //echo "si funciono perro";
    }
    public function inicio ()
    {
        echo "hola";
    }
}
