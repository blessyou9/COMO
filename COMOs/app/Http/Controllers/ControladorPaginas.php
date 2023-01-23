<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    function fInicio(){
        return view ('inicio');
    }

   /* function fPagina(){
        return view ('pagina');
    }

    public function contact_post()
    {
        echo "Nombre: ".$request->input('nombre')."<br>";
        echo "Apellido: ".$request->apellido."<br>";
        echo "Msj: ".request('mensaje')."<br>";
        return view('inicio');    }*/

    function fcontact(){
        return view('contact');
    }

    public function contact_post(Request $request)
    {
        return view('contact_info', [
            'nombre' => request('nombre'),
            'apellido' => request('apellido'),
            'mensaje' => request('mensaje'),
        ]);
    }
}