<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    public function _invoke(){
        return view("login");
    }

    function fInicio(){
        return view ('inicio');
    }

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