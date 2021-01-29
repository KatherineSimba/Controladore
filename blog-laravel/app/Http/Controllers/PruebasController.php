<?php
//Le decimos el namespace (se podria cambiar, para ordenar más la aplicación, en este caso lo dejaremos por defecto)
namespace App\Http\Controllers;
 
class PruebasController extends Controller {
 
 
    public function __construct()
    {
        $this->middleware('guest');
    }
 
    //Acción que devuelve una vista
    public function index()
    {
        return view('pruebas');
    }
 
}
