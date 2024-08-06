<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Paso 1: CREAR CONTROLADOR
    //PASO 2: MANDARLOS A LA VISTA
    /**
     * Decirle que use el controlador
     * para crear un nuevo controller, tiene que ser desde la terminal
     */

     public function __invoke(){
        //return "Bienvenidos a Intecap";
        return view("home");
     }

}
