<?php

namespace App\Http\Controllers;
//https://github.com/StydeNet/curso-de-laravel-10/tree/lesson6
use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index(){
        $curso = Curso::all();//select * from curso


        //return "Bienvenido a la carrera";
        //return view("curso/index");
        
    }

    public function crear(){
        //return "En está pagina podras ver los contenidos";
        return view("curso/crear");
    }

    public function mostrar($curso){
        //return "Bienvenido a la lista de cursos, estas en la opcion mostrar $curso";
        return view("curso/mostrar", ["curso" => $curso]);
    }
}
