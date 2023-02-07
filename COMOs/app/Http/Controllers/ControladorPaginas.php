<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    public function flogin(){
        return view("login");
    }

    function fProducto(){
        return view ('producto');
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