<?php
/* 
    COMPOSER: Sirve para el frontend
    LARAVEL: es el framework
*/
use Illuminate\Support\Facades\Route;
/**Mandamos a llamar al controlador
 * 
 */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/* Ya no vamos a usar esto, si no el de abajo
Route::get('/', function () {
    return view('welcome');
});
*/
//Vamos a usar esto
Route::get("/", HomeController::class);

Route::get("curso", [CursoController::class,'index']);
Route::get("curso/crear", [CursoController::class,'crear']);
Route::get("curso/mostrar", [CursoController::class,'mostrar']);
Route::get("curso/mostrar/{curso}", [CursoController::class,'mostrar']);

/*
Route::get("carreras", function(){
    return "Bienvenidos a la carrera";
});

Route::get("cursos/contenido", function(){
    return "En está pagina podras ver los contenidos";
});

Route::get("cursos/{curso}", function($curso){
    return "Bienvenidos al curso: $curso";
});
//funciona también con metodo post

Route::get("curso/{curso}/{categoria}", function($curso,$categoria){
    return "Bienvenidos al curso $curso, de la categoria $categoria";
});*/